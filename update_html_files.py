import os
import re

def update_php_files(directory):
    # Get all PHP files in the directory, excluding those starting with _ and index.php
    php_files = [f for f in os.listdir(directory) 
                if f.endswith('.php') 
                and not f.startswith('_')
                and f != 'index.php'
                and not f.startswith('update_')]
    
    for filename in php_files:
        filepath = os.path.join(directory, filename)
        
        # Generate page title from filename
        page_name = os.path.splitext(filename)[0]
        page_title = 'Full Stack Master - ' + ' '.join(word.capitalize() for word in page_name.split('-'))
        
        # Create new content
        new_content = f'''<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = '{page_title}';
$page_description = 'Full Stack Master - Programming Tutorials';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>



<?php include_file('includes/footer.php'); ?>'''
        
        # Write the new content to the file
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(new_content)
        
        print(f'Updated: {filename}')

if __name__ == "__main__":
    html_dir = os.path.join('tutorials', 'web-basics', 'html')
    update_php_files(html_dir)
    print("\nAll PHP files have been updated successfully!")
