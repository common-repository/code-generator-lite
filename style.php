<div style="width: 389px;"><?php echo $code_generator_lite_display_get_code_values[0]; ?><br /><div style="float: left;"></div><div style="float: right;"><a href="<?php echo $code_generator_lite_display_url; ?>" target="_blank">Get Password</a></div><div style="clear: both;"></div><form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="post">Password:<br /> <input type="text" name="code_generator_lite_generate_password" size="60" /><br /> Code:<br /> <input type="text" name="code_generator_lite_generate_code" size="60" value="<?php echo $code_generator_lite_generate_get_code->value; ?>" /><br /><br /> <input type="submit" name="code_generator_lite_generate_generate" value="Generate"></form></div>