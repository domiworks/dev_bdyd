function svgDynamic(){
	var widthDis = $(window).width();
	var heightDis = $(window).height();

	var widthNordesk = 1600;
	var heightNordesk = 1000;

	var widthNorphone = 1242;
	var heightNorphone = 2124;

	var xPerdes = widthDis/widthNordesk;
	var yPerdes = heightDis/heightNordesk;

	var xPerphone = widthDis/widthNorphone;
	var yPerphone = heightDis/heightNorphone;

	//diagPolly START
	var a =	(614.5)*xPerdes;
	var b =	(1000)*yPerdes ;

	var c =	(1299)*xPerdes;
	var d =	(1000)*yPerdes;

	var e =	(299)*xPerdes;
	var f =	(0)*yPerdes ;

	var g =	(0)*xPerdes;
	var h =	(0)*yPerdes ;

	var i =	(0)*xPerdes;
	var j =	(385.5)*yPerdes;

	var output = a+","+b+" "+c+","+d+" "+e+","+f+" "+g+","+h+" "+i+","+j ;
	//diagPolly END

	//diagSVGLine START
	var lx1 = (1298.99)*xPerdes;
	var ly1 = (1000)*yPerdes;

	var lx2 = (298.99)*xPerdes;
	var ly2 = (0)*yPerdes ;
	//diagSVGLine END

	//storeSVG START 1600,0 1600,1000 600,0 
	var strx1 = (1600)*xPerdes;
	var stry1 = (0)*yPerdes;

	var strx2 = (1600)*xPerdes;
	var stry2 = (1000)*yPerdes ;

	var strx3 = (600)*xPerdes;
	var stry3 = (0)*yPerdes ;

	var outputSTR = strx1+","+stry1+" "+strx2+","+stry2+" "+strx3+","+stry3 ;
	//storeSVG END

	//diagProductSVGLine START
	var lxp1 = (1600)*xPerdes;
	var lyp1 = (1000)*yPerdes;

	var lxp2 = (600)*xPerdes;
	var lyp2 = (0)*yPerdes ;
	//diagProductSVGLine END

	//bladeSVGPhone START
	var bpx1 = (1242)*xPerphone;
	var bpy1 = (0)*yPerphone ; 

	var bpx2 = (0)*xPerphone;
	var bpy2 = (0)*yPerphone ; 

	var bpx3 = (0)*xPerphone;
	var bpy3 = (1319.227)*yPerphone ; 

	var bpx4 = (1242)*xPerphone;
	var bpy4 = (804.773)*yPerphone ;


	var outputBP = bpx1+","+bpy1+" "+bpx2+","+bpy2+" "+bpx3+","+bpy3+" "+bpx4+","+bpy4 ;
	//bladeSVGPhone END

	$('.diagSVGContainer').width(widthDis);
	$('.diagSVGContainer').height(heightDis);
	$('#diagSVGSplash').width(widthDis);
	$('#diagSVGSplash').height(heightDis);

	$('#diagPolly').attr('points',output);

	$('#diagSVGLine').attr('x1',lx1);
	$('#diagSVGLine').attr('y1',ly1);
	$('#diagSVGLine').attr('x2',lx2);
	$('#diagSVGLine').attr('y2',ly2);

	$('#storeSVG').attr('points',outputSTR);

	$('#diagProductSVGLine').attr('x1',lxp1);
	$('#diagProductSVGLine').attr('y1',lyp1);
	$('#diagProductSVGLine').attr('x2',lxp2);
	$('#diagProductSVGLine').attr('y2',lyp2);

	$('#bladeSVGPhone').attr('points',outputBP);
};

$(document).ready(svgDynamic);
$(window).resize(svgDynamic);