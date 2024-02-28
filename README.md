# AMP Default Form Response Override.

This WordPress plugin is designed to modify the default form responses on AMP pages. It provides a more customizable experience for users, allowing developers to tailor responses to their specific needs.

## Features

- Overrides the default form responses on AMP pages.
- Provides a customizable experience for users.
- Easy to integrate with existing WordPress installations.

## Installation

1. Download the plugin and extract the files.
2. Rename the plugin's folder to `amp-skeleton-compat`.
3. Replace `AMP_Plugin_Name_Compat` with your namespace in every file.
4. Change the plugin name to your desired name.
5. Add your name as the author.
6. Add your plugin URI.

## Usage

After installation, the plugin will automatically start modifying the default form responses on your AMP pages. You can customize the responses by editing the files in the `sanitizers` and `css` directories.

## Contribution

If you need a feature or want to contribute, feel free to create an issue or submit a pull request.


## Plugin Structure

```markdown
.
├── sanitizers
│   ├── class-sanitizer.php
└── amp-default-form-response.php
```
## Sanitizers

The plugin uses `amp_content_sanitizers` filter to add custom sanitizers, we have added a two examples which add simple toggle for menu and search using amp-state and amp-bind.

### Need a feature in plugin?
Feel free to create contact on AMP Support Forum