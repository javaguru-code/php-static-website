import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'screens/home_screen.dart';

void main() {
  // Ensure fonts are bundled; no runtime fetching needed for offline use
  GoogleFonts.config.allowRuntimeFetching = false;
  runApp(const OfflineTutorialsApp());
}

class OfflineTutorialsApp extends StatelessWidget {
  const OfflineTutorialsApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Offline Tutorials',
      debugShowCheckedModeBanner: false,
      theme: ThemeData(
        useMaterial3: true,
        colorSchemeSeed: Colors.blue,
        textTheme: GoogleFonts.poppinsTextTheme(),
      ),
      home: const HomeScreen(),
    );
  }
}
