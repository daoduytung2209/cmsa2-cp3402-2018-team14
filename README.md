# Workflow Guide
Step by step guide on workflow for project

<h2>Generating Theme</h2>
<ol>
      <li> Visit https://underscores.me/</li>
      <li> Generate a new theme with SASS enabled using Underscore’s advanced settings.</li>
      <li> Once the theme is generated, it will be automatically downloaded to your system.</li>
<li> Paste theme inside you wordpress installation under wordpress\wp-content\plugins\yourthemehere\ </li>
      <li> Open directory in phpstorm for editing</li>
</ol>
<h2>Local Environment</h2>
<ol>
      <li>Download WampServer: http://www.wampserver.com/en/ </li>
<li>Setup a database in Wamp by opening Wamp, right clicking on its icon and visiting “phpMyAdmin”</li>
<li>After installation of WampServer find and install wordpress: https://wordpress.org/download/ </li>
<li>When your download of the Zip file is complete, extract the WordPress folder out of the Zip file and into the “www” folder of Wamp’s installation location. Usually, Wamp will be installed under “(C:)”.</li>
<liOnce Wordpress is in Wamp’s “www” folder, open Wordpress. To do so, execute Wamp, and in your browser visit http://localhost/wordpress/. This is assuming that the wordpress folder you pasted into Wamp hasn’t had its folder name changed.</li>
      <li>When you open Wordpress, set it up with the guide you’re presented with.</li>
</ol>
<h2>Github</h2>
<ol>
      <li>If you haven’t already, generate a Github repository for your team to use.</li>
<li>Generate a staging and a master branch using the drop down in the repository of the Github account.</li>
      <li>Upload the previously generated theme into the newly created staging branch.</li>
      </ol>
<h2>Trello</h2>
<ol>
      <li>Create or log in to a account for trello</li>
      <li>Click create a board</li>
      <li>Give the board a title & a desired theme</li>
      <li>Then ensure if trello board is to be public below the title</li>
      <li>Click create board</li>
      <li>Add members to the board by the name of their trello user by the name of the board</li>
      <li>Create lists of production</li>
      <li>Create card of tasks & apply a timeframe if necessary</li>
</ol>
<h2>Slack</h2>
<ol>
      <li>Create a slack group</li>
      <li>Add members to the slack group</li>
      <li>Then to include notifications for trello and github</li>
      <li>In Slack, click on the top-left site/username link and click Administration > Manage Apps</li>
      <li>Click Trello Alerts, then click on Add Configuration</li>
      <li>Choose your project group and click Add Trello Integration</li>
<li>Choose your Trello board, customise the options and click Save. You will probably find that ticking everything will be too 'noisy' (too many unhelpful messages in the Slack channel), so try it out and see what works for your team. You can always adjust it.</li>
      <li>Find and apply the github app</li>
      <li>Then copy the repository link and apply it to the app watcher</li>
      <li>Subscribe members to watching with /github subscribe https://github.com/repositoryname</li>
      </ol>
<h2>PhpStorm</h2>
<ol>
      <li>Download PhpStorm: https://www.jetbrains.com/phpstorm/download/#section=windows </li>
      <li>Run exe file and follow install instructions.</li>
</ol>
<h2>Installing Sass</h2>
<ol>
<li>Download and install Sass/Scss: http://www.ruby-lang.org/en/downloads/ </li>
      <li>Run gem.bat </li>
      <li>Choose installation package [1]</li>
      <li>Type the following command prompt or powershell : <code>gem install sass</code></li>
</ol>
<h2>File Watcher</h2>
<ol>
      <li>In PhpStorm: File> Settings/Preferences | Tools > File watcher</li>
      <li>Click the add button (Green plus) and choos SCSS</li>
      <li>Locate scss.bat in the Program box: C:\Ruby24-x64\bin\scss.bat</li>
      <li>Set the Arguments: --no-cache --update $FileName$:$FileNameWithoutExtension$.css</li>
      <li>Set the output: $FileNameWithoutExtension$.css:$FileNameWithoutExtension$.css.map</li>
</ol>
<h2>Syncing with Github</h2>
<ol>
      <li>Select File>Settings>Version Control>Github and login into your Github account</li>
<li>Once your Github account is setup with PhpStorm, select the “VCS” drop-down, hit Checkout From Version Control>Git and paste the Github repository’s link.</li>
      <li>To keep your project up to date go: VCS > Pull.</li>
      <li>Apply changes: VCS>Push</li>
      </ol>
<h1>Staging and Production</h1>
<h2>Google Cloud</h2>
<ol>
      <li>Create a google account or use a existing account to sign in: https://cloud.google.com/ </li>
      <li>Go to the console and start a new project</li>
      <li>Then can add in other members if necessary to be admins also to the project</li>
      <li>Under getting started select deploy a prebuilt solution</li>
      <li>Under Blog & CMS then find and apply wordpress certified by Bitnami</li>
      <li>Launch on Compute engine</li>
      <li>Name the machine and select the location then deploy </li>
<li>With the trial there is only one static IP per location so ensure that the locations are different</li>
      <li>Under VPC Network go to external IP address</li>
      <li>Change the machine IP to ephemeral to static</li>
      <li>Name the IP address and reserve</li>
      <li>Modify machines to fit needs</li>
<li>Bitnami images documentation https://docs.bitnami.com/google/apps/wordpress/ add in members as admins to the wordpress installation. Link domain to now created wordpress machine (will need a domain in order to view live). </li>
      <li>WP pusher plugin add to the wordpress</li>
      <p>Download from https://wppusher.com/ Add through wp-admin as an uploaded plugin</p>
</ol>
