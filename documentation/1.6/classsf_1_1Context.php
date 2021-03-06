<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Context Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Context.php">Context</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="classsf_1_1Context-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Context Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>Class wrapping an OpenGL context.  
 <a href="classsf_1_1Context.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Context_8hpp_source.php">Context.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::Context:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1Context.png" usemap="#sf::Context_map" alt=""/>
  <map id="sf::Context_map" name="sf::Context_map">
<area href="structsf_1_1NonCopyable.php" title="Utility base class to easily declare non-copyable classes." alt="sf::NonCopyable" shape="rect" coords="0,0,105,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:aba22797a790706ca2c5c04ee39f2b555"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Context.php#aba22797a790706ca2c5c04ee39f2b555">Context</a> ()</td></tr>
<tr class="memdesc:aba22797a790706ca2c5c04ee39f2b555"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor, create the context.  <a href="#aba22797a790706ca2c5c04ee39f2b555"></a><br/></td></tr>
<tr class="separator:aba22797a790706ca2c5c04ee39f2b555"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a805b1bbdb3e52b1fda7c9bf2cd6ca86b"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Context.php#a805b1bbdb3e52b1fda7c9bf2cd6ca86b">~Context</a> ()</td></tr>
<tr class="memdesc:a805b1bbdb3e52b1fda7c9bf2cd6ca86b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor, destroy the context.  <a href="#a805b1bbdb3e52b1fda7c9bf2cd6ca86b"></a><br/></td></tr>
<tr class="separator:a805b1bbdb3e52b1fda7c9bf2cd6ca86b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab1d95acf0b2e5f1464c3a0471a54a8f7"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Context.php#ab1d95acf0b2e5f1464c3a0471a54a8f7">SetActive</a> (bool Active)</td></tr>
<tr class="memdesc:ab1d95acf0b2e5f1464c3a0471a54a8f7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Activate or deactivate the context.  <a href="#ab1d95acf0b2e5f1464c3a0471a54a8f7"></a><br/></td></tr>
<tr class="separator:ab1d95acf0b2e5f1464c3a0471a54a8f7"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a04f1ee1fa35169aae7b941e0d9a99bf3"><td class="memItemLeft" align="right" valign="top">static bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Context.php#a04f1ee1fa35169aae7b941e0d9a99bf3">IsContextActive</a> ()</td></tr>
<tr class="memdesc:a04f1ee1fa35169aae7b941e0d9a99bf3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Check if there's a context bound to the current thread.  <a href="#a04f1ee1fa35169aae7b941e0d9a99bf3"></a><br/></td></tr>
<tr class="separator:a04f1ee1fa35169aae7b941e0d9a99bf3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0b5e14e9d48c6ef888b88a5729ee34e4"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1Context.php">Context</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Context.php#a0b5e14e9d48c6ef888b88a5729ee34e4">GetGlobal</a> ()</td></tr>
<tr class="memdesc:a0b5e14e9d48c6ef888b88a5729ee34e4"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the global context.  <a href="#a0b5e14e9d48c6ef888b88a5729ee34e4"></a><br/></td></tr>
<tr class="separator:a0b5e14e9d48c6ef888b88a5729ee34e4"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Class wrapping an OpenGL context. </p>
<p>All SFML windows already have their own context, so this class is more a helper for specific issues involving OpenGL and multi-threading. It's meant to be used internally. </p>

<p>Definition at line <a class="el" href="Context_8hpp_source.php#l00049">49</a> of file <a class="el" href="Context_8hpp_source.php">Context.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="aba22797a790706ca2c5c04ee39f2b555"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Context::Context </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor, create the context. </p>

</div>
</div>
<a class="anchor" id="a805b1bbdb3e52b1fda7c9bf2cd6ca86b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Context::~Context </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor, destroy the context. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a0b5e14e9d48c6ef888b88a5729ee34e4"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1Context.php">Context</a>&amp; sf::Context::GetGlobal </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the global context. </p>
<dl class="section return"><dt>Returns</dt><dd>Reference to the global context </dd></dl>

</div>
</div>
<a class="anchor" id="a04f1ee1fa35169aae7b941e0d9a99bf3"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static bool sf::Context::IsContextActive </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Check if there's a context bound to the current thread. </p>
<dl class="section return"><dt>Returns</dt><dd>True if there's a context bound to the current thread </dd></dl>

</div>
</div>
<a class="anchor" id="ab1d95acf0b2e5f1464c3a0471a54a8f7"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Context::SetActive </td>
          <td>(</td>
          <td class="paramtype">bool&#160;</td>
          <td class="paramname"><em>Active</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Activate or deactivate the context. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Active</td><td>: True to activate the context, false to deactivate it </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Context_8hpp_source.php">Context.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
