# Responsive-Default-for-1.5.5
This HTML5 template is mobile friendly and uses Responsive CSS to allow sharing of a single template across multiple device types.  It uses PHP Mobile Detect to serve up the optimized layout based on device. It allows the designer to implement device-specific php, jquery, javascript or ajax.

Allot of man hours went into not just this project but the several before it to make it what it is today. <b>Support this Project</b> enables me to spend time on this project to further provide ongoing updates, features and requests.
<br />
<br />
Keep this project FREE, any size $$Donation$$ by the community is greatly appreciated. 

| Doughnut Donation          | Sandwich Donation         | Pizza Donation       | Pizza & Wing Donation        |
| -------------------------- |:-------------------------:|:--------------------:| ----------------------------:|
| <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BJ86BC9C5KQDU" target="_blank"> $1 </a> | <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=57P7PDGM4Q4E2" target="_blank"> $5  </a> | <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KLCHQ7V5NHVXS" target="_blank"> $10  </a> | <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=N8TXNSMUAZ9JU" target="_blank"> $20  </a> |

<br /><br />
<b class="mainColor">Install</b>
<br /><br />
<b>It is recommended that you always backup your Files and Database prior to installing any plugin or template.</b>
<br /><br />
1. Go to your host cpanel and select the backup wizard.<br />
2. Click on Backup.<br />
3. Click on Full Backup.<br />
4. Click on Generate Backup.<br />
<br />
Once the full backup of your account has been completed, you will receive an email at the address you specified.<br /><br />

<hr />
<b>Unzip and Prepare Package</b>
<br /><br />
1. You will need a File Extractor.<br />
2. Extract the package contents using your favorite File Extractor.<br />

3. Directories<br /><br />

Rename the <b>YOUR_ADMIN_FOLDER</b> to your actual admin folders name.<br /><br />

<b>Using as a standalone template</b><br />
<b>DO NOT</b> rename the responsive_default directories.<br /><br />

<b>Using as a template conversion</b><br />
<b>RENAME</b> the responsive_default directories to your template override directory name.<br /><br />

```
ADMIN_FILES/YOUR_ADMIN_FOLDER/layout_controller.php
CATALOG_FILES/includes/modules/pages/specials/main_template_vars.php
CATALOG_FILES/includes/modules/responsive_default/additional_images.php
CATALOG_FILES/includes/modules/responsive_default/also_purchased_products.php
CATALOG_FILES/includes/modules/responsive_default/category_row.php
CATALOG_FILES/includes/modules/responsive_default/column_left.php
CATALOG_FILES/includes/modules/responsive_default/featured_products.php
CATALOG_FILES/includes/modules/responsive_default/new_products.php
CATALOG_FILES/includes/modules/responsive_default/specials_index.php
CATALOG_FILES/includes/templates/responsive_default/common/html_header.php
CATALOG_FILES/includes/templates/responsive_default/common/tpl_box_default_left.php
CATALOG_FILES/includes/templates/responsive_default/common/tpl_box_default_right.php
CATALOG_FILES/includes/templates/responsive_default/common/tpl_columnar_display.php
CATALOG_FILES/includes/templates/responsive_default/common/tpl_main_page.php
CATALOG_FILES/includes/templates/responsive_default/css/CSS_read_me.txt
CATALOG_FILES/includes/templates/responsive_default/css/stylesheet.css
CATALOG_FILES/includes/templates/responsive_default/css/responsive_default.css
CATALOG_FILES/includes/templates/responsive_default/css/responsive_mobile.css
CATALOG_FILES/includes/templates/responsive_default/css/responsive_tablet.css
CATALOG_FILES/includes/templates/responsive_default/jscript/jquery.matchHeight.js
CATALOG_FILES/includes/templates/responsive_default/jscript/jscript_matchHeight-min.js
CATALOG_FILES/includes/templates/responsive_default/jscript/jscript_responsive_framework.php
CATALOG_FILES/includes/templates/responsive_default/template_info.php
```

4. If you already have the above files in your template override directory, do not upload these files. Make the following file code merges to your existing files. Be sure to use a Plain Text Editor when editing these files.<br /><br />

Save these files.<br /><br />

<hr />
<b>Run the SQL Patch</b>
<br /><br />

1. Copy the package install_sql.txt contents.<br />
2. Go to your ADMIN.<br />
3. Hover over Tools and Click (Install SQL Patches).<br />
4. Paste the Copied code in the provided text area.<br />
5. Click the Send button.<br /><br />

<hr />
<b>Upload Package Files</b>
<br /><br />

1. You will need a FTP Client.<br /><br />

I use and will provide basic instructions using FTP with Filezilla.<br /><br />

2. Enter the address of the server, your username, password, and port if needed into the top of the Quickconnect bar.<br />
3. Once you are connected navigate to the directory on your local machine where you unzipped the package in the right side of window and navigate to your store root directory on your web host in the left side of the window.<br />
4. Drag the includes directory and drop it in the folder above the includes folder.<br /><br />


<hr />
<b>Configuration / Setup</b>
<br /><br />
1. Go to your ADMIN.<br />
2. Hover over Tools and Click (Template Selection). Skip this step, step 3 and 4 if using this template as a template conversion<br />
3. Click the "Edit" button.<br />
4. Choose <b>Responsive Default</b> from the select list and click update.<br /><br />

5. Hover over Tools and Click (Layout Boxes Controller).<br />

6. Scroll to the bottom and Click the "reset" button.<br /><br />

<b>Note:</b> You will now see 3 new columns (Desktop Status, Tablet Status and Mobile Status), this is where you turn these side-boxes off for specific devices.<br /><br />

7. Hover over Configuration and Click (Layout Settings).<br />

<b>Note:</b> You will now see 4 new configuration.<br /><br />

<b>New Configuration(s)</b>
<br />


| Title         | Value         | Description         |
| ------------- |:-------------:| -------------------:|
| Responsive Left Column Width | 2 | Set Width of Left Column, Default is 2, Total columns 12. Responsive Left, Center & Right Column Width must = 12 |
| Responsive Center Column Width | 8 | Set Width of Right Column, Default is 8, Total columns 12. Responsive Left, Center & Right Column Width must = 12 |
| Responsive Right Column Width | 2 | Set Width of Right Column, Default is 2, Total columns 12. Responsive Left, Center & Right Column Width must = 12 |
| Responsive Mobile Full Site Version Width | 980px | Set Width of Responsive Mobile Full Site Version, Default is 980px, To give mobile users same experience, this width should be the same max-width for the #mainWrapper selector in your stylesheet.css file |

<br />

<hr />
<b class="mainColor">Uninstall</b>
<br /><br />
1. Remove all <i class="zca">New</i> files from the package that you uploaded. <br />
2. Restore any <i class="blue">Existing</i> or <i class="red">Core</i> files in the package that you merged. <br />
3. Copy the packages uninstall_sql.txt contents.<br />
4. Go to your ADMIN.<br />
5. Hover over Tools and Click (Install SQL Patches).<br />
6. Paste the Copied code in the provided text area.<br />
7. Click the Send button.<br />
</p>
</div>
<!-- ************************************************************************************** -->
