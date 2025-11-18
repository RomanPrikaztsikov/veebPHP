<?php
echo"<h2>GIT käsud</h2>";
echo "<ol>";
echo "<li>Repo loomine";
echo "<pre>git init</pre>";
echo "</li>";
?>
<li>Konfigureerimine
<pre>
    git config --global user.name "Roman Prikaztsikov"
    git config --global user.email "mikolkyle@gmail.com"
    git config --global --list
</pre>
</li>
<li>
    ssh võti loomine
    <pre>
        ssh-keygen -o -t rsa -C "mikolkyle@gmail.com"
    </pre>
    id_rsa.pub võti kopeeritakse githubi nagu deploy key
</li>
<li>
    jälgimise lisamine ja commit'i tegemine
    <pre>
        git status
        git add .
        git commit -a -m "commiti tekst"
    </pre>
</li>
<?php
echo "<li>GITHUB projektiga sidumine";
