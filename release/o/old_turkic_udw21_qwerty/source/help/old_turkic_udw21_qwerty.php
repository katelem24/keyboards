<?php 
  $pagename = 'Old Turkic UDW21 (QWERTY) Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');
?>

<p>
    Old Turkic UDW21 (QWERTY) is an Old Turkic script keyboard for Old Turkish language per Universal Dependencies for Old Turkish paper at UDW21, based on US English keyboard and aimed at case insensitive ASCII input without special characters using QWERTY to output a subset of Old Turkic Unicode with minimal variables and restricted keyboard access.
</p>

<p>
    This Old Turkic script keyboard enables an ASCII representation of the Old Turkish language to be embeddable in various digital contexts such as programming language identifiers or other restrictive environments while not giving up on the full phonetic range of the script. The Keyman implementation works when the app is not given full access.
</p>

<p>
    Typing works as follows for the transliteration recognized ASCII inputs: initially, if the input is a vowel, it will set the backness, and if not an implicit vowel (a or e), it will emit the Old Turkic character; otherwise, if the input is a consonant, it will set the articulation and not emit any characters. If the initial input was a consonant, then if the middle input is a vowel, it will set the backness, emit the consonant's Old Turkic character with correct backness, and if not an implicit vowel, emit the vowel's Old Turkic character; otherwise, if the middle input is a consonant, it will only override the articulation with the new consonant. Finally, with backness not empty, any vowel or consonant will emit the corresponding Old Turkic character. In addition to primary consonant representations, h, f, and v fricative alternatives map to k, p, and b for ergonomics. At any place, pressing the space key once will clear both backness and articulation, which pressing backspace also does when there is no Old Turkic character yet, and pressing the space key again will emit the common punctuation colon. Doing a shift + space will emit actual space character.
</p>

<h2>Links</h2>
<ul>
<li>Home: <a href='https://keyman.com/keyboards/old_turkic_udw21_qwerty'>https://keyman.com/keyboards/old_turkic_udw21_qwerty</a></li>
<li>Help: <a href='https://help.keyman.com/keyboard/old_turkic_udw21_qwerty'>https://help.keyman.com/keyboard/old_turkic_udw21_qwerty</a></li>
<li>Paper: <a href='https://aclanthology.org/2021.udw-1.11'>https://aclanthology.org/2021.udw-1.11</a></li>
<li>Transliteration Tables: <a href='https://github.com/mehmetoguzderin/UD_Old_Turkish/tree/dev/not-to-release#transliteration'>https://github.com/mehmetoguzderin/UD_Old_Turkish/tree/dev/not-to-release#transliteration</a></li>
<li>Transliteration Implementation App (iOS): <a href='https://apps.apple.com/app/ascii-turk/id1601998507'>https://apps.apple.com/app/ascii-turk/id1601998507</a></li>
<li>Base Keyboard: <a href='https://keyman.com/keyboards/basic_kbdus'>https://keyman.com/keyboards/basic_kbdus</a></li>
<li>Font: <a href='https://fonts.google.com/noto/specimen/Noto+Sans+Old+Turkic'>https://fonts.google.com/noto/specimen/Noto+Sans+Old+Turkic</a></li>
</ul>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default'>
</div>

<h2>Mobile Keyboard Layout</h2>
<div id='osk-tablet' data-states='default'>
</div>

<p>© Mehmet Oguz Derin and Takahiro Harada</p>
