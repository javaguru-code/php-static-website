import 'package:flutter/material.dart';
import 'package:flutter_html/flutter_html.dart';
import 'package:flutter/services.dart' show rootBundle;
import '../models/tutorial.dart';

class TutorialScreen extends StatefulWidget {
  final Tutorial tutorial;
  const TutorialScreen({super.key, required this.tutorial});

  @override
  State<TutorialScreen> createState() => _TutorialScreenState();
}

class _TutorialScreenState extends State<TutorialScreen> {
  late final Future<String> _htmlFuture;

  @override
  void initState() {
    super.initState();
    _htmlFuture = rootBundle.loadString(widget.tutorial.path);
  }

  String _rewriteAssetImageSrc(String html, String baseDir) {
    // Convert relative image sources to Flutter asset scheme so flutter_html can load them
    final pattern = RegExp(r'''src="(?!https?:|asset:|data:)([^"]+)"|src='(?!https?:|asset:|data:)([^']+)' ''', caseSensitive: false);
    return html.replaceAllMapped(pattern, (m) {
      final src = m.group(1) ?? m.group(2)!;
      final quote = m.group(1) != null ? '"' : '\'';
      // Only rewrite obvious relative paths (e.g., media/foo.png, ./img.png)
      if (src.startsWith('media/') || src.startsWith('./') || src.startsWith('../') || !src.contains('/')) {
        final normalized = src.startsWith('./') ? src.substring(2) : src;
        final newSrc = 'asset:$baseDir/$normalized';
        return 'src=$quote$newSrc$quote';
      }
      return m.group(0)!;
    });
  }

  @override
  Widget build(BuildContext context) {
    final baseDir = widget.tutorial.path.substring(0, widget.tutorial.path.lastIndexOf('/'));
    return Scaffold(
      appBar: AppBar(title: Text(widget.tutorial.title)),
      body: FutureBuilder<String>(
        future: _htmlFuture,
        builder: (context, snapshot) {
          if (!snapshot.hasData) {
            if (snapshot.hasError) {
              return const Center(child: Text('Failed to load tutorial'));
            }
            return const Center(child: CircularProgressIndicator());
          }
          final htmlData = _rewriteAssetImageSrc(snapshot.data!, baseDir);
          return SingleChildScrollView(
            child: Html(
              data: htmlData,
            ),
          );
        },
      ),
    );
  }
}
