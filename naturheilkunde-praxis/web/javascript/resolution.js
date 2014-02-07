function adjustStyle(width,height) {
    width = parseInt(width);
    height = parseInt(height);
    var innerhframe=document.getElementById('innerhframe');
    var outerhframe=document.getElementById('outerhframe');
    var outervframe=document.getElementById('outervframe');
    var toplogoframe=$(top.toplogoframe.document);
    var bottomonlineframe=$(top.bottomonlineframe.document);
    if(innerhframe && outerhframe && outervframe && toplogoframe && bottomonlineframe) {
        if(width<1100 || height < 700) {
        	var logoheight=Math.min(width/11, Math.min(width/20, 60)+height/20);
        	var logomargin=Math.min(width/50, height/50);
        	outervframe.rows=logoheight+',*,55';
        	toplogoframe.find('body').css('margin-left', '5px');
        	toplogoframe.find('body').css('margin-top', ''+logomargin);
        	bottomonlineframe.find('*').addClass('small');
        }
        else {
        	outervframe.rows='120,*,95';
        	toplogoframe.find('body').css('margin-left', '30px');
        	toplogoframe.find('body').css('margin-top', '30px');
        	bottomonlineframe.find('*').removeClass('small');
        }
        if(width<1100) {
        	toplogoframe.find('img').css('width', '100%');
        }
        else {
        	toplogoframe.find('img').css('width', '844');
        }
    	outerhframe.cols=(width>=1200)?'15%,73%,12%':'15%,80%,5%';
    	innerhframe.cols=(width>=1200)?'18%,82%':'125,*';
    }
}

function adjustMainStyle() {
    adjustStyle($(this).width(),$(this).height());
}

$(window).resize(function() {
	adjustMainStyle();
});

$(document).ready(function() {
	adjustMainStyle();
});

