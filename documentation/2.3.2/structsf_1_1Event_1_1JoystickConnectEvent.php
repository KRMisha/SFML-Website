<?php
    $version = '2.3.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Event::JoystickConnectEvent Struct Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.10 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Event.php">Event</a></li><li class="navelem"><a class="el" href="structsf_1_1Event_1_1JoystickConnectEvent.php">JoystickConnectEvent</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="structsf_1_1Event_1_1JoystickConnectEvent-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Event::JoystickConnectEvent Struct Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p><a class="el" href="classsf_1_1Joystick.php" title="Give access to the real-time state of the joysticks. ">Joystick</a> connection events parameters (JoystickConnected, JoystickDisconnected)  
 <a href="structsf_1_1Event_1_1JoystickConnectEvent.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Event_8hpp_source.php">Event.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:a08e58e8559d3e4fe4654855fec79194b"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1Event_1_1JoystickConnectEvent.php#a08e58e8559d3e4fe4654855fec79194b">joystickId</a></td></tr>
<tr class="memdesc:a08e58e8559d3e4fe4654855fec79194b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Index of the joystick (in range [0 .. <a class="el" href="classsf_1_1Joystick.php#a951a7c775921304a5f3443c6e2bb4d65a6e0a2a95bc1da277610c04d80f52715e" title="Maximum number of supported joysticks. ">Joystick::Count</a> - 1])  <a href="#a08e58e8559d3e4fe4654855fec79194b">More...</a><br /></td></tr>
<tr class="separator:a08e58e8559d3e4fe4654855fec79194b"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p><a class="el" href="classsf_1_1Joystick.php" title="Give access to the real-time state of the joysticks. ">Joystick</a> connection events parameters (JoystickConnected, JoystickDisconnected) </p>

<p>Definition at line <a class="el" href="Event_8hpp_source.php#l00133">133</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>
</div><h2 class="groupheader">Member Data Documentation</h2>
<a class="anchor" id="a08e58e8559d3e4fe4654855fec79194b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::Event::JoystickConnectEvent::joystickId</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Index of the joystick (in range [0 .. <a class="el" href="classsf_1_1Joystick.php#a951a7c775921304a5f3443c6e2bb4d65a6e0a2a95bc1da277610c04d80f52715e" title="Maximum number of supported joysticks. ">Joystick::Count</a> - 1]) </p>

<p>Definition at line <a class="el" href="Event_8hpp_source.php#l00135">135</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="Event_8hpp_source.php">Event.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
