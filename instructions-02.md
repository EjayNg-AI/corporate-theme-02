Based on the examination of your project files, here are the major points and rectifications needed to ensure your theme is fully FSE-ready and conforms to current WordPress standards:

1.  **`functions.php` - Theme Setup**:
    The `corporate_theme_v3_setup` function includes several `add_theme_support` calls that are either managed by `theme.json` in FSE themes or are default.
    Specifically, `add_editor_style( 'assets/css/style.css' )` is not the primary way editor styles are handled in FSE; `theme.json` and WordPress automatically loading its styles in the editor is standard.
    Features like `responsive-embeds`, `custom-line-height`, `experimental-link-color`, `custom-units`, and `align-wide` are largely controlled or enabled by `theme.json` settings (e.g., `appearanceTools: true`, `spacing`, `typography` settings). `title-tag` is also handled by WordPress by default in FSE themes.
    **Rectification**: Remove redundant `add_theme_support` calls from `corporate_theme_v3_setup`. Ensure all relevant settings are defined in `theme.json`.

2.  **`functions.php` - Menu Registration**:
    The `corporate_theme_v3_register_menus` function uses `register_nav_menus()`. In FSE themes, navigation is handled by the Navigation block, which pulls data from `wp_navigation` CPTs created via the editor, not from classic menu locations. The `wp:navigation {"ref":4}` in `parts/header.html` already points to such a menu.
    **Rectification**: Remove the `corporate_theme_v3_register_menus` function and its `add_action` call. Manage all navigation menus through the Site Editor and the Navigation block.

3.  **`functions.php` - Home Page Query Modification**:
    The `corporate_theme_v3_home_query` function modifies the main query for the homepage using `pre_get_posts`. In FSE, the content and query parameters for the homepage (or any template) are defined directly within the template file (e.g., `templates/home.html` or `templates/index.html`) using the Query Loop block.
    **Rectification**: Remove the `corporate_theme_v3_home_query` function and its `add_action` call. Configure any specific query parameters for your homepage directly in the Query Loop block within the `templates/home.html` (or `index.html` if `home.html` is not used as the front page) template via the Site Editor or by editing the block markup.
