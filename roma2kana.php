<?

class Roma2Kana{

	var $raw_data = <<< EOM
kya,きゃ
kyu,きゅ
kyo,きょ
sha,しゃ
shu,しゅ
sho,しょ
sya,しゃ
syu,しゅ
syo,しょ
cha,ちゃ
chu,ちゅ
cho,ちょ
tya,ちゃ
tyu,ちゅ
tyo,ちょ
nya,にゃ
nyu,にゅ
nyo,にょ
hya,ひゃ
hyu,ひゅ
hyo,ひょ
mya,みゃ
myu,みゅ
myo,みょ
rya,りゃ
ryu,りゅ
ryo,りょ
gya,ぎゃ
gyu,ぎゅ
gyo,ぎょ
ja,じゃ
ju,じゅ
jo,じょ
zya,じゃ
zyu,じゅ
zyo,じょ
bya,びゃ
byu,びゅ
byo,びょ
pya,ぴゃ
pyu,ぴゅ
pyo,ぴょ
xa,ぁ
xi,ぃ
xu,ぅ
xe,ぇ
xo,ぉ
xya,ゃ
xyu,ゅ
xyo,ょ
xtsu,っ
shi,し
chi,ち
tsu,つ
ka,か
ki,き
ku,く
ke,け
ko,こ
sa,さ
si,し
su,す
se,せ
so,そ
ta,た
ti,ち
tu,つ
te,て
to,と
na,な
ni,に
nu,ぬ
ne,ね
no,の
ha,は
hi,ひ
hu,ふ
he,へ
ho,ほ
ma,ま
mi,み
mu,む
me,め
mo,も
ya,や
yu,ゆ
yo,よ
ra,ら
ri,り
ru,る
re,れ
ro,ろ
wa,わ
wo,を
ga,が
gi,ぎ
gu,ぐ
ge,げ
go,ご
za,ざ
zi,じ
ji,じ
zu,ず
ze,ぜ
zo,ぞ
da,だ
di,ぢ
du,づ
de,で
do,ど
ba,ば
bi,び
bu,ぶ
be,べ
bo,ぼ
pa,ぱ
pi,ぴ
pu,ぷ
pe,ぺ
po,ぽ
n,ん
a,あ
i,い
u,う
e,え
o,お
EOM;

	var $roma2kana = null;
	var $roma = null;
	var $kana = null;

	function __construct(){
		// $data = file_get_contents("./aiueo.csv");
		$data = $this->raw_data;
		$split_data = explode("\n", $data);
		$arr = array();
		foreach($split_data as $v){
			$split_v = explode(",", $v);
			$arr[$split_v[0]] = $split_v[1];
		}
		$this->roma2kana = $arr;
		$this->roma = array_keys($arr);
		$this->kana = array_values($arr);
	}

	public function to_kana($str){

		if($this->roma2kana == null){
			$this->__construct();
		}
		return str_replace($this->roma, $this->kana, $str);

	}

}

