<?php

namespace _PhpScoper15dc67236b17;

// from Case_Ignorable in https://unicode.org/Public/UNIDATA/DerivedCoreProperties.txt
return '/(?<![\\x{0027}\\x{002E}\\x{003A}\\x{005E}\\x{0060}\\x{00A8}\\x{00AD}\\x{00AF}\\x{00B4}\\x{00B7}\\x{00B8}\\x{02B0}-\\x{02C1}\\x{02C2}-\\x{02C5}\\x{02C6}-\\x{02D1}\\x{02D2}-\\x{02DF}\\x{02E0}-\\x{02E4}\\x{02E5}-\\x{02EB}\\x{02EC}\\x{02ED}\\x{02EE}\\x{02EF}-\\x{02FF}\\x{0300}-\\x{036F}\\x{0374}\\x{0375}\\x{037A}\\x{0384}-\\x{0385}\\x{0387}\\x{0483}-\\x{0487}\\x{0488}-\\x{0489}\\x{0559}\\x{0591}-\\x{05BD}\\x{05BF}\\x{05C1}-\\x{05C2}\\x{05C4}-\\x{05C5}\\x{05C7}\\x{05F4}\\x{0600}-\\x{0605}\\x{0610}-\\x{061A}\\x{061C}\\x{0640}\\x{064B}-\\x{065F}\\x{0670}\\x{06D6}-\\x{06DC}\\x{06DD}\\x{06DF}-\\x{06E4}\\x{06E5}-\\x{06E6}\\x{06E7}-\\x{06E8}\\x{06EA}-\\x{06ED}\\x{070F}\\x{0711}\\x{0730}-\\x{074A}\\x{07A6}-\\x{07B0}\\x{07EB}-\\x{07F3}\\x{07F4}-\\x{07F5}\\x{07FA}\\x{07FD}\\x{0816}-\\x{0819}\\x{081A}\\x{081B}-\\x{0823}\\x{0824}\\x{0825}-\\x{0827}\\x{0828}\\x{0829}-\\x{082D}\\x{0859}-\\x{085B}\\x{08D3}-\\x{08E1}\\x{08E2}\\x{08E3}-\\x{0902}\\x{093A}\\x{093C}\\x{0941}-\\x{0948}\\x{094D}\\x{0951}-\\x{0957}\\x{0962}-\\x{0963}\\x{0971}\\x{0981}\\x{09BC}\\x{09C1}-\\x{09C4}\\x{09CD}\\x{09E2}-\\x{09E3}\\x{09FE}\\x{0A01}-\\x{0A02}\\x{0A3C}\\x{0A41}-\\x{0A42}\\x{0A47}-\\x{0A48}\\x{0A4B}-\\x{0A4D}\\x{0A51}\\x{0A70}-\\x{0A71}\\x{0A75}\\x{0A81}-\\x{0A82}\\x{0ABC}\\x{0AC1}-\\x{0AC5}\\x{0AC7}-\\x{0AC8}\\x{0ACD}\\x{0AE2}-\\x{0AE3}\\x{0AFA}-\\x{0AFF}\\x{0B01}\\x{0B3C}\\x{0B3F}\\x{0B41}-\\x{0B44}\\x{0B4D}\\x{0B56}\\x{0B62}-\\x{0B63}\\x{0B82}\\x{0BC0}\\x{0BCD}\\x{0C00}\\x{0C04}\\x{0C3E}-\\x{0C40}\\x{0C46}-\\x{0C48}\\x{0C4A}-\\x{0C4D}\\x{0C55}-\\x{0C56}\\x{0C62}-\\x{0C63}\\x{0C81}\\x{0CBC}\\x{0CBF}\\x{0CC6}\\x{0CCC}-\\x{0CCD}\\x{0CE2}-\\x{0CE3}\\x{0D00}-\\x{0D01}\\x{0D3B}-\\x{0D3C}\\x{0D41}-\\x{0D44}\\x{0D4D}\\x{0D62}-\\x{0D63}\\x{0DCA}\\x{0DD2}-\\x{0DD4}\\x{0DD6}\\x{0E31}\\x{0E34}-\\x{0E3A}\\x{0E46}\\x{0E47}-\\x{0E4E}\\x{0EB1}\\x{0EB4}-\\x{0EB9}\\x{0EBB}-\\x{0EBC}\\x{0EC6}\\x{0EC8}-\\x{0ECD}\\x{0F18}-\\x{0F19}\\x{0F35}\\x{0F37}\\x{0F39}\\x{0F71}-\\x{0F7E}\\x{0F80}-\\x{0F84}\\x{0F86}-\\x{0F87}\\x{0F8D}-\\x{0F97}\\x{0F99}-\\x{0FBC}\\x{0FC6}\\x{102D}-\\x{1030}\\x{1032}-\\x{1037}\\x{1039}-\\x{103A}\\x{103D}-\\x{103E}\\x{1058}-\\x{1059}\\x{105E}-\\x{1060}\\x{1071}-\\x{1074}\\x{1082}\\x{1085}-\\x{1086}\\x{108D}\\x{109D}\\x{10FC}\\x{135D}-\\x{135F}\\x{1712}-\\x{1714}\\x{1732}-\\x{1734}\\x{1752}-\\x{1753}\\x{1772}-\\x{1773}\\x{17B4}-\\x{17B5}\\x{17B7}-\\x{17BD}\\x{17C6}\\x{17C9}-\\x{17D3}\\x{17D7}\\x{17DD}\\x{180B}-\\x{180D}\\x{180E}\\x{1843}\\x{1885}-\\x{1886}\\x{18A9}\\x{1920}-\\x{1922}\\x{1927}-\\x{1928}\\x{1932}\\x{1939}-\\x{193B}\\x{1A17}-\\x{1A18}\\x{1A1B}\\x{1A56}\\x{1A58}-\\x{1A5E}\\x{1A60}\\x{1A62}\\x{1A65}-\\x{1A6C}\\x{1A73}-\\x{1A7C}\\x{1A7F}\\x{1AA7}\\x{1AB0}-\\x{1ABD}\\x{1ABE}\\x{1B00}-\\x{1B03}\\x{1B34}\\x{1B36}-\\x{1B3A}\\x{1B3C}\\x{1B42}\\x{1B6B}-\\x{1B73}\\x{1B80}-\\x{1B81}\\x{1BA2}-\\x{1BA5}\\x{1BA8}-\\x{1BA9}\\x{1BAB}-\\x{1BAD}\\x{1BE6}\\x{1BE8}-\\x{1BE9}\\x{1BED}\\x{1BEF}-\\x{1BF1}\\x{1C2C}-\\x{1C33}\\x{1C36}-\\x{1C37}\\x{1C78}-\\x{1C7D}\\x{1CD0}-\\x{1CD2}\\x{1CD4}-\\x{1CE0}\\x{1CE2}-\\x{1CE8}\\x{1CED}\\x{1CF4}\\x{1CF8}-\\x{1CF9}\\x{1D2C}-\\x{1D6A}\\x{1D78}\\x{1D9B}-\\x{1DBF}\\x{1DC0}-\\x{1DF9}\\x{1DFB}-\\x{1DFF}\\x{1FBD}\\x{1FBF}-\\x{1FC1}\\x{1FCD}-\\x{1FCF}\\x{1FDD}-\\x{1FDF}\\x{1FED}-\\x{1FEF}\\x{1FFD}-\\x{1FFE}\\x{200B}-\\x{200F}\\x{2018}\\x{2019}\\x{2024}\\x{2027}\\x{202A}-\\x{202E}\\x{2060}-\\x{2064}\\x{2066}-\\x{206F}\\x{2071}\\x{207F}\\x{2090}-\\x{209C}\\x{20D0}-\\x{20DC}\\x{20DD}-\\x{20E0}\\x{20E1}\\x{20E2}-\\x{20E4}\\x{20E5}-\\x{20F0}\\x{2C7C}-\\x{2C7D}\\x{2CEF}-\\x{2CF1}\\x{2D6F}\\x{2D7F}\\x{2DE0}-\\x{2DFF}\\x{2E2F}\\x{3005}\\x{302A}-\\x{302D}\\x{3031}-\\x{3035}\\x{303B}\\x{3099}-\\x{309A}\\x{309B}-\\x{309C}\\x{309D}-\\x{309E}\\x{30FC}-\\x{30FE}\\x{A015}\\x{A4F8}-\\x{A4FD}\\x{A60C}\\x{A66F}\\x{A670}-\\x{A672}\\x{A674}-\\x{A67D}\\x{A67F}\\x{A69C}-\\x{A69D}\\x{A69E}-\\x{A69F}\\x{A6F0}-\\x{A6F1}\\x{A700}-\\x{A716}\\x{A717}-\\x{A71F}\\x{A720}-\\x{A721}\\x{A770}\\x{A788}\\x{A789}-\\x{A78A}\\x{A7F8}-\\x{A7F9}\\x{A802}\\x{A806}\\x{A80B}\\x{A825}-\\x{A826}\\x{A8C4}-\\x{A8C5}\\x{A8E0}-\\x{A8F1}\\x{A8FF}\\x{A926}-\\x{A92D}\\x{A947}-\\x{A951}\\x{A980}-\\x{A982}\\x{A9B3}\\x{A9B6}-\\x{A9B9}\\x{A9BC}\\x{A9CF}\\x{A9E5}\\x{A9E6}\\x{AA29}-\\x{AA2E}\\x{AA31}-\\x{AA32}\\x{AA35}-\\x{AA36}\\x{AA43}\\x{AA4C}\\x{AA70}\\x{AA7C}\\x{AAB0}\\x{AAB2}-\\x{AAB4}\\x{AAB7}-\\x{AAB8}\\x{AABE}-\\x{AABF}\\x{AAC1}\\x{AADD}\\x{AAEC}-\\x{AAED}\\x{AAF3}-\\x{AAF4}\\x{AAF6}\\x{AB5B}\\x{AB5C}-\\x{AB5F}\\x{ABE5}\\x{ABE8}\\x{ABED}\\x{FB1E}\\x{FBB2}-\\x{FBC1}\\x{FE00}-\\x{FE0F}\\x{FE13}\\x{FE20}-\\x{FE2F}\\x{FE52}\\x{FE55}\\x{FEFF}\\x{FF07}\\x{FF0E}\\x{FF1A}\\x{FF3E}\\x{FF40}\\x{FF70}\\x{FF9E}-\\x{FF9F}\\x{FFE3}\\x{FFF9}-\\x{FFFB}\\x{101FD}\\x{102E0}\\x{10376}-\\x{1037A}\\x{10A01}-\\x{10A03}\\x{10A05}-\\x{10A06}\\x{10A0C}-\\x{10A0F}\\x{10A38}-\\x{10A3A}\\x{10A3F}\\x{10AE5}-\\x{10AE6}\\x{10D24}-\\x{10D27}\\x{10F46}-\\x{10F50}\\x{11001}\\x{11038}-\\x{11046}\\x{1107F}-\\x{11081}\\x{110B3}-\\x{110B6}\\x{110B9}-\\x{110BA}\\x{110BD}\\x{110CD}\\x{11100}-\\x{11102}\\x{11127}-\\x{1112B}\\x{1112D}-\\x{11134}\\x{11173}\\x{11180}-\\x{11181}\\x{111B6}-\\x{111BE}\\x{111C9}-\\x{111CC}\\x{1122F}-\\x{11231}\\x{11234}\\x{11236}-\\x{11237}\\x{1123E}\\x{112DF}\\x{112E3}-\\x{112EA}\\x{11300}-\\x{11301}\\x{1133B}-\\x{1133C}\\x{11340}\\x{11366}-\\x{1136C}\\x{11370}-\\x{11374}\\x{11438}-\\x{1143F}\\x{11442}-\\x{11444}\\x{11446}\\x{1145E}\\x{114B3}-\\x{114B8}\\x{114BA}\\x{114BF}-\\x{114C0}\\x{114C2}-\\x{114C3}\\x{115B2}-\\x{115B5}\\x{115BC}-\\x{115BD}\\x{115BF}-\\x{115C0}\\x{115DC}-\\x{115DD}\\x{11633}-\\x{1163A}\\x{1163D}\\x{1163F}-\\x{11640}\\x{116AB}\\x{116AD}\\x{116B0}-\\x{116B5}\\x{116B7}\\x{1171D}-\\x{1171F}\\x{11722}-\\x{11725}\\x{11727}-\\x{1172B}\\x{1182F}-\\x{11837}\\x{11839}-\\x{1183A}\\x{11A01}-\\x{11A0A}\\x{11A33}-\\x{11A38}\\x{11A3B}-\\x{11A3E}\\x{11A47}\\x{11A51}-\\x{11A56}\\x{11A59}-\\x{11A5B}\\x{11A8A}-\\x{11A96}\\x{11A98}-\\x{11A99}\\x{11C30}-\\x{11C36}\\x{11C38}-\\x{11C3D}\\x{11C3F}\\x{11C92}-\\x{11CA7}\\x{11CAA}-\\x{11CB0}\\x{11CB2}-\\x{11CB3}\\x{11CB5}-\\x{11CB6}\\x{11D31}-\\x{11D36}\\x{11D3A}\\x{11D3C}-\\x{11D3D}\\x{11D3F}-\\x{11D45}\\x{11D47}\\x{11D90}-\\x{11D91}\\x{11D95}\\x{11D97}\\x{11EF3}-\\x{11EF4}\\x{16AF0}-\\x{16AF4}\\x{16B30}-\\x{16B36}\\x{16B40}-\\x{16B43}\\x{16F8F}-\\x{16F92}\\x{16F93}-\\x{16F9F}\\x{16FE0}-\\x{16FE1}\\x{1BC9D}-\\x{1BC9E}\\x{1BCA0}-\\x{1BCA3}\\x{1D167}-\\x{1D169}\\x{1D173}-\\x{1D17A}\\x{1D17B}-\\x{1D182}\\x{1D185}-\\x{1D18B}\\x{1D1AA}-\\x{1D1AD}\\x{1D242}-\\x{1D244}\\x{1DA00}-\\x{1DA36}\\x{1DA3B}-\\x{1DA6C}\\x{1DA75}\\x{1DA84}\\x{1DA9B}-\\x{1DA9F}\\x{1DAA1}-\\x{1DAAF}\\x{1E000}-\\x{1E006}\\x{1E008}-\\x{1E018}\\x{1E01B}-\\x{1E021}\\x{1E023}-\\x{1E024}\\x{1E026}-\\x{1E02A}\\x{1E8D0}-\\x{1E8D6}\\x{1E944}-\\x{1E94A}\\x{1F3FB}-\\x{1F3FF}\\x{E0001}\\x{E0020}-\\x{E007F}\\x{E0100}-\\x{E01EF}])(\\pL)(\\pL*+)/u';