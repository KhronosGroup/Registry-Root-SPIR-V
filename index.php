<?php
$static_title = 'Khronos SPIR-V Registry';
include_once("../../assets/static_pages/khr_page_top.php");
?>

<h2>SPIR-V, Extended Instruction Set, and Extension Specifications</h2>

<p>
    SPIR-V is a binary intermediate language for representing
    graphical-shader stages and compute kernels for multiple Khronos APIs,
    including OpenCL, OpenGL, and Vulkan.
    SPIR-V defines a new language and is a successor to the original
    <a href="../spir/">Khronos SPIR</a>, which supported only OpenCL device programs.
</p>

<p> This registry contains or points to: </p>

<ul>
  <li> <a href="#spec">SPIR-V Specifications</a>, Headers, and Grammar </li>
  <li> <a href="#extins">SPIR-V Extended Instruction Sets</a> and Headers </li>
  <li> <a href="#extensions">SPIR-V Extension Specifications</a> </li>
  <li> The <a href="#xml">Vendor and Token Registry</a> of reserved vendor IDs and opcode ranges</li>
</ul>

<h3> <a name="spec"></a> SPIR-V Unified Specification, Headers, and Grammar.</h3>

<p>
The unified specification contains all previous versions of SPIR-V.
<ul>
    <li> SPIR-V 1.6 was released Dec. 16, 2021 (Revision 2: June 21, 2022. Revision 3: Dec. 4, 2023. Revision 4: July 3, 2024.)</li>
    <li> SPIR-V 1.5 was released Sep. 13, 2020</li>
    <li> SPIR-V 1.4 was released May 7, 2019</li>
    <ul>
        <li> <a href="specs/unified1/SPIRV.html">HTML</a></li>
        <li> <a href="specs/unified1/SPIRV.pdf">PDF</a></li>
    </ul>
    <li> Header files are available in the Khronos GitHub project
         <a href="https://github.com/KhronosGroup/SPIRV-Headers">
         SPIRV-Headers</a> in the directory
         <a href="https://github.com/KhronosGroup/SPIRV-Headers/tree/master/include/spirv/unified1">
         include/spirv/unified1/</a>, including, but not limited to:
                <ul>
                    <li> <a href="https://github.com/KhronosGroup/SPIRV-Headers/blob/master/include/spirv/unified1/spirv.h">spirv.h</a> (C) </li>
                    <li> <a href="https://github.com/KhronosGroup/SPIRV-Headers/blob/master/include/spirv/unified1/spirv.hpp">spirv.hpp</a> (C++) </li>
                    <li> <a href="https://github.com/KhronosGroup/SPIRV-Headers/blob/master/include/spirv/unified1/spirv.hpp11">spirv.hpp11</a> (C++11) </li>
                    <li> <a href="https://github.com/KhronosGroup/SPIRV-Headers/blob/master/include/spirv/unified1/spirv.lua">spirv.lua</a> (Lua) </li>
                    <li> <a href="https://github.com/KhronosGroup/SPIRV-Headers/blob/master/include/spirv/unified1/spirv.json">spirv.json</a> (JSON) </li>
                    <li> <a href="https://github.com/KhronosGroup/SPIRV-Headers/blob/master/include/spirv/unified1/spirv.py">spirv.py</a> (Python) </li>
                </ul>
    </li>
    <li> Machine-readable JSON grammar:
        <ul>
            <li> <a href="https://github.com/KhronosGroup/SPIRV-Headers/blob/master/include/spirv/unified1/spirv.core.grammar.json">spirv.core.grammar.json</a> </li>
            <li> Documentation for the Machine-readable JSON grammar:
                        <a href="specs/unified1/MachineReadableGrammar.html">HTML</a>,
                        <a href="specs/unified1/MachineReadableGrammar.pdf">PDF</a> </li>
        </ul>
    </li>
</ul>
</p>

<h3> <a name="extins"></a> Extended Instruction Sets and Headers </h3>

<p>There are separate specifications describing extended instruction sets:</p>

<ul>
    <li>
        OpenCL C Language:
        <ul>
            <li> <a href="specs/unified1/OpenCL.ExtendedInstructionSet.100.html">HTML</a> </li>
            <li> <a href="specs/unified1/OpenCL.ExtendedInstructionSet.100.pdf">PDF</a> </li>
            <li> <a href="https://github.com/KhronosGroup/SPIRV-Headers/blob/master/include/spirv/unified1/OpenCL.std.h">OpenCL.std.h</a> </li>
            <li> <a href="https://github.com/KhronosGroup/SPIRV-Headers/blob/master/include/spirv/unified1/extinst.opencl.std.100.grammar.json">extinst.opencl.std.100.grammar.json</a> </li>
        </ul>
    </li>
    <li>
        Graphics Shading Languages:
        <ul>
            <li> <a href="specs/unified1/GLSL.std.450.html">HTML</a> </li>
            <li> <a href="specs/unified1/GLSL.std.450.pdf">PDF</a> </li>
            <li> <a href="https://github.com/KhronosGroup/SPIRV-Headers/blob/master/include/spirv/unified1/GLSL.std.450.h">GLSL.std.450.h</a> </li>
            <li> <a href="https://github.com/KhronosGroup/SPIRV-Headers/blob/master/include/spirv/unified1/extinst.glsl.std.450.grammar.json">extinst.glsl.std.450.grammar.json</a> </li>
        </ul>
    </li>
    <li>
        OpenCL Debug Information, Version 2:
        <ul>
            <li> <a href="specs/unified1/OpenCL.DebugInfo.100.html">HTML</a> </li>
            <li> <a href="specs/unified1/OpenCL.DebugInfo.100.pdf">PDF</a> </li>
        </ul>
        OpenCL Debug Information, Version 1:
        <ul>
            <li> <a href="specs/unified1/DebugInfo.html">HTML</a> </li>
            <li> <a href="specs/unified1/DebugInfo.pdf">PDF</a> </li>
        </ul>
    </li>
</ul>

<h3>
    <a name="extensions"></a> SPIR-V Extension Specifications
</h3>

<p> Extension specifications are located and indexed in the Khronos GitHub project
<a href="https://github.com/KhronosGroup/SPIRV-Registry">SPIRV-Registry</a>.
New extensions can be proposed as a pull request to that repository.</p>

<h3>
    <a name="xml"></a> Vendor and Token Registry
</h3>

<p>
    The SPIR-V Vendor and Token Registry is an XML file serving as the canonical document defining reserved vendor IDs
    and binary token ranges.
    It is available in the Khronos GitHub project at
    <a href="https://github.com/KhronosGroup/SPIRV-Headers/blob/master/include/spirv/spir-v.xml">spir-v.xml</a>.
</p>

<p>
    If you need a vendor ID, or a reserved range of opcode or operand token values for your
    implementation, please file an issue or pull request in the
    <a href="https://github.com/KhronosGroup/SPIRV-Headers">SPIRV-Headers</a>
    project.
</p>

<h2>Older Specification Versions</h2>

<p>
    Older specifications are superceded by the <a href="#spec">Unified Specification</a>.
</p>

<h2> Providing Feedback on the Registry </h2>

<p> Khronos welcomes feedback on SPIR-V. To provide feedback, please file an
    issue in the <a
    href="https://github.com/KhronosGroup/SPIRV-Headers">SPIRV-Headers</a>
    project. </p>
<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
</body>
</html>
