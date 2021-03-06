<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Clock Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.10 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Clock.php">Clock</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1Clock-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Clock Class Reference<div class="ingroups"><a class="el" href="group__system.php">System module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Utility class that measures the elapsed time.  
 <a href="classsf_1_1Clock.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Clock_8hpp_source.php">Clock.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:abbc959c7830ca7c3a4da133cb506d3fd"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Clock.php#abbc959c7830ca7c3a4da133cb506d3fd">Clock</a> ()</td></tr>
<tr class="memdesc:abbc959c7830ca7c3a4da133cb506d3fd"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#abbc959c7830ca7c3a4da133cb506d3fd">More...</a><br /></td></tr>
<tr class="separator:abbc959c7830ca7c3a4da133cb506d3fd"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a799feb6acb099b57b58d8d20984fce11"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Time.php">Time</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Clock.php#a799feb6acb099b57b58d8d20984fce11">getElapsedTime</a> () const </td></tr>
<tr class="memdesc:a799feb6acb099b57b58d8d20984fce11"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the elapsed time.  <a href="#a799feb6acb099b57b58d8d20984fce11">More...</a><br /></td></tr>
<tr class="separator:a799feb6acb099b57b58d8d20984fce11"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a123e2627f2943e5ecaa1db0c7df3231b"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Time.php">Time</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Clock.php#a123e2627f2943e5ecaa1db0c7df3231b">restart</a> ()</td></tr>
<tr class="memdesc:a123e2627f2943e5ecaa1db0c7df3231b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Restart the clock.  <a href="#a123e2627f2943e5ecaa1db0c7df3231b">More...</a><br /></td></tr>
<tr class="separator:a123e2627f2943e5ecaa1db0c7df3231b"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Utility class that measures the elapsed time. </p>
<p><a class="el" href="classsf_1_1Clock.php" title="Utility class that measures the elapsed time. ">sf::Clock</a> is a lightweight class for measuring time.</p>
<p>Its provides the most precise time that the underlying OS can achieve (generally microseconds or nanoseconds). It also ensures monotonicity, which means that the returned time can never go backward, even if the system time is changed.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><a class="code" href="classsf_1_1Clock.php">sf::Clock</a> clock;</div>
<div class="line">...</div>
<div class="line">Time time1 = clock.<a class="code" href="classsf_1_1Clock.php#a799feb6acb099b57b58d8d20984fce11">getElapsedTime</a>();</div>
<div class="line">...</div>
<div class="line"><a class="code" href="classsf_1_1Time.php#acba0cfbc49e3a09a22a8e079eb67a05c">Time</a> time2 = clock.<a class="code" href="classsf_1_1Clock.php#a123e2627f2943e5ecaa1db0c7df3231b">restart</a>();</div>
</div><!-- fragment --><p>The <a class="el" href="classsf_1_1Time.php" title="Represents a time value. ">sf::Time</a> value returned by the clock can then be converted to a number of seconds, milliseconds or even microseconds.</p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Time.php" title="Represents a time value. ">sf::Time</a> </dd></dl>

<p>Definition at line <a class="el" href="Clock_8hpp_source.php#l00041">41</a> of file <a class="el" href="Clock_8hpp_source.php">Clock.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="abbc959c7830ca7c3a4da133cb506d3fd"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Clock::Clock </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>The clock starts automatically after being constructed. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a799feb6acb099b57b58d8d20984fce11"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Time.php">Time</a> sf::Clock::getElapsedTime </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the elapsed time. </p>
<p>This function returns the time elapsed since the last call to <a class="el" href="classsf_1_1Clock.php#a123e2627f2943e5ecaa1db0c7df3231b" title="Restart the clock. ">restart()</a> (or the construction of the instance if <a class="el" href="classsf_1_1Clock.php#a123e2627f2943e5ecaa1db0c7df3231b" title="Restart the clock. ">restart()</a> has not been called).</p>
<dl class="section return"><dt>Returns</dt><dd><a class="el" href="classsf_1_1Time.php" title="Represents a time value. ">Time</a> elapsed </dd></dl>

</div>
</div>
<a class="anchor" id="a123e2627f2943e5ecaa1db0c7df3231b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Time.php">Time</a> sf::Clock::restart </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Restart the clock. </p>
<p>This function puts the time counter back to zero. It also returns the time elapsed since the clock was started.</p>
<dl class="section return"><dt>Returns</dt><dd><a class="el" href="classsf_1_1Time.php" title="Represents a time value. ">Time</a> elapsed </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Clock_8hpp_source.php">Clock.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
