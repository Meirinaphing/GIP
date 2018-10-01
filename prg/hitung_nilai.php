<?php
$nilai=0;
$nilaii[1]= $_POST['komunikasi'];
$nilaii[2]= $_POST['kecerdasan'];
$nilaii[3]= $_POST['percaya_diri'];
$nilaii[4]= $_POST['kemampuan_umum'];
$nilaii[5]= $_POST['kemampuan_khusus'];
$nilaii[6]= $_POST['kepemimpinan'];
$nilaii[7]= $_POST['motivasi'];
$nilaii[8]= $_POST['pengalaman'];
$nilaii[9]= $_POST['pengambilan_keputusn'];
$nilaii[10]= $_POST['sosialisasi'];
$nn=1;
$total = 5*10;
while ( $nn <= 10) {
	$nilai += $nilaii[$nn];
$nn++;
}
$hasil = ($nilai/$total)*100;
if($hasil>59){
	$ls="Dapat lanjut di tahap selanjutnya";
}else{
	$ls="Ditunda Sementara";
}
?>
<script src="lte/plugins/knob/jquery.knob.js"></script>

<input type="text"  class="knob" value="<?php echo $hasil; ?>" data-skin="tron" data-thickness="0.2" data-width="90"
                           data-height="90" data-fgColor="#3c8dbc" data-readonly="true"> <?php echo $ls; ?>
                           <script type="text/javascript">
                           		$(function () {
					    /* jQueryKnob */

					    $('.knob').knob({
					      /*change : function (value) {
					       //console.log("change : " + value);
					       },
					       release : function (value) {
					       console.log("release : " + value);
					       },
					       cancel : function () {
					       console.log("cancel : " + this.value);
					       },*/
					      draw: function () {

					        // "tron" case
					        if (this.$.data('skin') == 'tron') {

					          var a   = this.angle(this.cv)  // Angle
					            ,
					              sa  = this.startAngle          // Previous start angle
					            ,
					              sat = this.startAngle         // Start angle
					            ,
					              ea                            // Previous end angle
					            ,
					              eat = sat + a                 // End angle
					            ,
					              r   = true

					          this.g.lineWidth = this.lineWidth

					          this.o.cursor
					          && (sat = eat - 0.3)
					          && (eat = eat + 0.3)

					          if (this.o.displayPrevious) {
					            ea = this.startAngle + this.angle(this.value)
					            this.o.cursor
					            && (sa = ea - 0.3)
					            && (ea = ea + 0.3)
					            this.g.beginPath()
					            this.g.strokeStyle = this.previousColor
					            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
					            this.g.stroke()
					          }

					          this.g.beginPath()
					          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
					          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
					          this.g.stroke()

					          this.g.lineWidth = 2
					          this.g.beginPath()
					          this.g.strokeStyle = this.o.fgColor
					          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
					          this.g.stroke()

					          return false
					        }
					      }
					    })
					    })
					</script>