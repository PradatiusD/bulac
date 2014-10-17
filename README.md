BULAC
=====

Multi-site Wordpress

Due to Foundation 5 not being compatible with Sass 3.4 we need to uninstall all sass versions.

```bash
# Uninstall sass
sudo gem uninstall sass

# Reinstall the version that works with Foundation 5
sudo gem install sass -v 3.2.19

```