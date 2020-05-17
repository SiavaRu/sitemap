# SEO Sitemap Extension for phpBB 3.2 / 3.3

This extension adds xml sitemaps to your phpBB forum. This extension allows you to exclude forums by name or size. It additionally has the ability to add link in the footer for the sitemap.

## Requirements
* phpBB 3.2.0 or higher
* php 7.0 or higher

## Installation

#### Download Method
- [Download the latest release](https://github.com/CrazyC0d3r/sitemap) and unzip it.
- Unzip the downloaded files and copy it to the `ext` directory of your phpBB board. The directory structure should be **phpBB3/ext/welshpaul/sitemap**
- Navigate in the ACP to `Customise -> Manage extensions`.
- Look for Sitemap under the Disabled Extensions list, and click `Enable` link.

#### Git Clone Method

```
cd phpBB3  (base forum install)
git clone https://github.com/CrazyC0d3r/sitemap.git ext/welshpaul/sitemap/
```

## Activate
- Go to ACP -> tab Customise -> Manage extensions -> enable Sitemap

## Configure

- Goto ACP -> Extensions -> Sitemap

## Update

#### Download Installation Used

- Go to ACP -> tab Customise -> Manage extensions -> disable Sitemap
- Delete files in ext/welshpaul/sitemap
- Download new files. Unzip and copy files to phpBB3/ext/welshpaul/sitemap
- Go to ACP -> tab Customise -> Manage extensions -> enable Sitemap

#### Git Clone Installation Used

- Go to ACP -> tab Customise -> Manage extensions -> disable Sitemap

```
cd phpBB3/ext/welshpaul/sitemap
git pull
```

- Go to ACP -> tab Customise -> Manage extensions -> enable Sitemap

## Uninstallation
- Navigate in the ACP to `Customise -> Manage extensions`.
- Click the `Disable` link for Sitemap.
- To permanently uninstall, click `Delete Data`, then delete the `sitemap` folder from `phpBB3/ext/welshpaul/`.

## Problems
- Check the file structure where you installed the code. It must be in:
```
       <phpBB root folder>/ext/welshpaul/sitemap
```

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

© 2020 - Paul Norman (WelshPaul)
