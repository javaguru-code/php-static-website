class Tutorial {
  final String id;
  final String title;
  final String category; // category id, e.g., 'html'
  final String path; // asset path like 'assets/tutorials/html/sample.html'
  final String? description;

  const Tutorial({
    required this.id,
    required this.title,
    required this.category,
    required this.path,
    this.description,
  });

  factory Tutorial.fromJson(Map<String, dynamic> json) => Tutorial(
        id: json['id'] as String,
        title: json['title'] as String,
        category: json['category'] as String,
        path: json['path'] as String,
        description: json['description'] as String?,
      );
}
