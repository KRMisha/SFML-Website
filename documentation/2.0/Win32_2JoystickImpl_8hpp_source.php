<?php
    $version = '2.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_a0fcb5a19f655e235834e6382998c7e0.php">sfml</a></li><li class="navelem"><a class="el" href="dir_29bf4fae8a8e962aff98775afacdab0f.php">sfml</a></li><li class="navelem"><a class="el" href="dir_e08987e907e430954db197f1220bd556.php">src</a></li><li class="navelem"><a class="el" href="dir_67163b7d99179e1ca51fe5e67c990233.php">SFML</a></li><li class="navelem"><a class="el" href="dir_6ae484f7449d3a65758d28d1198ce9c8.php">Window</a></li><li class="navelem"><a class="el" href="dir_21a8f7d2b27cf87eac6109eb501192fd.php">Win32</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Win32/JoystickImpl.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2013 Laurent Gomila (laurent.gom@gmail.com)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_JOYSTICKIMPLWIN32_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_JOYSTICKIMPLWIN32_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#ifdef _WIN32_WINDOWS</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor"></span><span class="preprocessor">    #undef _WIN32_WINDOWS</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#ifdef _WIN32_WINNT</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor"></span><span class="preprocessor">    #undef _WIN32_WINNT</span></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define _WIN32_WINDOWS 0x0501</span></div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define _WIN32_WINNT   0x0501</span></div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#include &lt;SFML/Window/JoystickImpl.hpp&gt;</span></div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="preprocessor">#include &lt;windows.h&gt;</span></div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;<span class="preprocessor">#include &lt;mmsystem.h&gt;</span></div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;<span class="preprocessor">#include &lt;cmath&gt;</span></div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;{</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="keyword">namespace </span>priv</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;{</div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;<span class="keyword">class </span>JoystickImpl</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;{</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">bool</span> isConnected(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> index);</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;    <span class="keywordtype">bool</span> open(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> index);</div>
<div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;    <span class="keywordtype">void</span> close();</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;    JoystickCaps getCapabilities() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;    JoystickState update();</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;<span class="keyword">private</span> :</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;</div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;<span class="comment"></span>    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> m_index; </div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;    JOYCAPS      m_caps;  </div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;};</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;} <span class="comment">// namespace priv</span></div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;</div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;</div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;<span class="preprocessor">#endif // SFML_JOYSTICKIMPLWIN32_HPP</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
