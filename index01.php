<?php
echo '<form action="form.php" method="post">
 <p>
 <label for="nametag">Name</label>
 <input type="text" name="nametag" size="20" />
 </p>
 <p>
 <label for="myfile">File name</label>
 <input type ="text" id="myfile" name="myfile" readonly="readonly" />
 <a href="upload.php?placeValuesBeforeTB_=savedValues&TB_iframe=true&height=300&width=400&modal=true" class="thickbox">Upload</a>
 </p>
 <p style="text-align:right;"><input type="submit" name="Submit" value="Send" /></p>
</form>'
?>