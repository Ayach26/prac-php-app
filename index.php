<?php
// 配列
$array_1 = [1, 2, 3];

echo '<pre>';
echo $array_1;
echo '</pre>';

echo '<pre>';
echo $array_1[1];
echo '</pre>';

echo '<pre>';
var_dump($array_1);
echo '</pre>';

echo '<pre>';
var_dump($array_2);
echo '</pre>';

// 2次元配列
$array_2 =  [
  ['赤', '青', '黄'],
  ['緑', '紫', '黒'],
];

// '紫'出力
echo '<pre>';
var_dump($array_2[1][1]);
echo '</pre>';

//　連想配列
$array_member = [
  'name' => 'name',
  'height' => 'height',
  'hobby' => 'hobby',
];

echo '<pre>';
var_dump($array_member);
echo '</pre>';

echo '<pre>';
echo $array_member['hobby'];
echo '</pre>';

$array_member_2 = [
  'member1' => [
    'height' => 'height1',
    'hobby' => 'hobby1',
  ],
  'member2' => [
    'height' => 'height2',
    'hobby' => 'hobby2',
  ],
];

echo '<pre>';
echo $array_member_2['member1']['height'];
echo '</pre>';

echo '<pre>';
var_dump($array_member_2);
echo '</pre>';

$array_member_3 = [
  '1' => [
    'member1' => [
      'height' => 'height1',
      'hobby' => 'hobby1',
    ],
  ],
  '2' => [
    'member2' => [
      'height' => 'height2',
      'hobby' => 'hobby2',
    ],
    'member3' => [
      'height' => 'height3',
      'hobby' => 'hobby3',
    ],
  ],
];

echo '<pre>';
var_dump($array_member_3);
echo '</pre>';

echo '<pre>';
echo $array_member_3['2']['member2']['height'];
echo '</pre>';

?>