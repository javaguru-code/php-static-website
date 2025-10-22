import 'package:flutter/material.dart';
import '../services/index_loader.dart';
import '../models/tutorial.dart';
import 'tutorial_screen.dart';

class ListScreen extends StatelessWidget {
  final String categoryId;
  const ListScreen({super.key, required this.categoryId});

  @override
  Widget build(BuildContext context) {
    final loader = IndexLoader.instance;
    final tutorials = loader.tutorialsFor(categoryId);
    final categoryName = loader.categoryName(categoryId);

    return Scaffold(
      appBar: AppBar(title: Text(categoryName)),
      body: ListView.separated(
        itemCount: tutorials.length,
        separatorBuilder: (_, __) => const Divider(height: 1),
        itemBuilder: (context, index) {
          final t = tutorials[index];
          return ListTile(
            title: Text(t.title),
            subtitle: t.description != null ? Text(t.description!) : null,
            trailing: const Icon(Icons.chevron_right),
            onTap: () => Navigator.of(context).push(
              MaterialPageRoute(
                builder: (_) => TutorialScreen(tutorial: t),
              ),
            ),
          );
        },
      ),
    );
  }
}
