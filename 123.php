<?php

echo ('<!DOCTYPE html>
<html>
  <head>
    <title>Main</title>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
  <!-- 
  <script type="text/javascript">
    </script>
	-->
  </head>
  <body>
  <?php
    $handle = fopen("info1.csv", "r");
    $data = fgetcsv($handle, 1000, ",");
	fclose($handle);
  ?>
    <div id="base" class="">
      <div id="u0" class="ax_default heading_3">
        <div id="u0_div" class=""></div>
        <div id="u1" class="text" style="visibility: visible;">
          <p><span style="color:#3366FF;">LIST CURRENT NAMES IN DATABASE CHAT TABLE&nbsp; &nbsp; &nbsp;&nbsp; </span><span style="color:#CC0033;">SQL</span><span style="color:#3366FF;"> select from Database</span></p>
        </div>
      </div>

      <div id="u2" class="ax_default box_1">
        <div id="u2_div" class=""></div>
        <div id="u3" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <div id="u4" class="ax_default box_1">
        <div class="">
		<input id="u4_div" type="text" name="username" value="name"/> 
		</div>
        <div id="u5" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <div id="u6" class="ax_default box_1">
        <div class="">
		<input id="u4_div" type="password" name="password" value="password"/> 
		</div>
        <div id="u7" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <div id="u8" class="ax_default label">
        <div id="u8_div" class=""></div>
        <div id="u9" class="text" style="visibility: visible;">
          <p><span>ENTER YOUR NAME /PASSWORD</span></p>
        </div>
      </div>

      <div id="u10" class="ax_default box_1">
        <div id="u10_div" class=""><p id="u10_div_text">12112312312312312311231231231231 </p></div>
        </div>
      </div>

      <div id="u12" class="ax_default label">
        <div id="u12_div" class=""></div>
        <div id="u13" class="text" style="visibility: visible;">
          <p><span>CONTENT TRANSMITTED AS TYPED</span></p>
        </div>
      </div>

      <div id="u14" class="ax_default box_1">
        <div id="u14_div" class=""></div>
        <div id="u15" class="text" style="visibility: visible;">
          <p><span>WARING IN SPAN IF FAIL TO MAKE AN UPDATE</span></p>
        </div>
      </div>

      <div id="u16" class="ax_default box_1">
        <div id="u16_div" class=""></div>
        <div id="u17" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <div id="u18" class="ax_default box_1">
        <div class="">
		<input id="u4_div" type="text" name="username" value="name"/> 
		</div>
        <div id="u19" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <div id="u20" class="ax_default label">
        <div id="u20_div" class=""></div>
        <div id="u21" class="text" style="visibility: visible;">
          <p><span>ENTER VALID NAME</span></p><p><span>&amp;RETRIEVE CHAT on listen CLICK</span></p>
        </div>
      </div>

      <div id="u22" class="ax_default ellipse">
        <img id="u22_img" class="img " src="images/home/u22.png"/>
        <div id="u23" class="text" style="visibility: visible;">
          <p><span>listen</span></p>
        </div>
      </div>

      <div id="u24" class="ax_default box_1">
        <div id="u24_div" class="">
		<p id="u11_div_text">121123123123123123112312312312312312312123123112312312312312312312123123112312312312312312312123123112312312312331212312311231231231231231231212312311231231231231231231212312311231231231231231231212312311231231231231231231212312311231231231231231231212312311231231231231231231233</p>
		</div>
        <div id="u25" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>
    </div>
  </body>
</html>
')


?>