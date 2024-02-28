# AMP Default Form Response Override.

This WordPress plugin is designed to modify the default form responses on AMP pages. It provides a more customizable experience for users, allowing developers to tailor responses to their specific needs.

## Features

- Overrides the default form responses on AMP pages.
- Provides a customizable experience for users.
- Easy to integrate with existing WordPress installations.

## Installation

1. Download the plugin files from the GitHub repository.
2. Log in to your WordPress admin panel.
3. Navigate to `Plugins > Add New`.
4. Click on the `Upload Plugin` button at the top of the page.
5. Click `Choose File` and select the downloaded plugin file.
6. Click `Install Now`.
7. After the plugin has been installed, click `Activate Plugin`.

Now, the AMP Default Form Response Override plugin should be installed and activated on your WordPress site.

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