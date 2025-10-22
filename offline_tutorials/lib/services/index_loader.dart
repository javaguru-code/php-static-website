import 'dart:convert';
import 'package:flutter/services.dart' show rootBundle;
import '../models/tutorial.dart';

class IndexLoader {
  IndexLoader._();
  static final IndexLoader instance = IndexLoader._();

  bool _loaded = false;
  final Map<String, String> _categoryNames = {};
  final List<Tutorial> _tutorials = [];

  Future<void> load() async {
    if (_loaded) return;
    final data = await rootBundle.loadString('assets/index.json');
    final Map<String, dynamic> jsonData = json.decode(data);

    // Categories: list of {id, name}
    for (final c in (jsonData['categories'] as List<dynamic>)) {
      _categoryNames[c['id'] as String] = c['name'] as String;
    }

    // Tutorials: list of {...}
    for (final t in (jsonData['tutorials'] as List<dynamic>)) {
      _tutorials.add(Tutorial.fromJson(Map<String, dynamic>.from(t as Map)));
    }
    _loaded = true;
  }

  List<String> get categoryIds => _categoryNames.keys.toList()
    ..sort((a, b) => _categoryNames[a]!.compareTo(_categoryNames[b]!));

  String categoryName(String id) => _categoryNames[id] ?? id;

  List<Tutorial> tutorialsFor(String categoryId) => _tutorials
      .where((t) => t.category.toLowerCase() == categoryId.toLowerCase())
      .toList()
    ..sort((a, b) => a.title.compareTo(b.title));

  Tutorial? findById(String id) {
    try {
      return _tutorials.firstWhere((t) => t.id == id);
    } catch (_) {
      return null;
    }
  }
}
