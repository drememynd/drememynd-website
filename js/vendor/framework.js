$(window).resize(row_auto_height_fix);
$(window).ready(row_auto_height_fix);

function row_auto_height_fix()
{
    return;
    console.log('---------------------------------------');
    var winHeight = $(window).height();
    console.log('winHeight: ', winHeight);
    
    var rows = $('.content-body .row').filter(':visible');
    
    var docHeight = $(document).outerHeight(true);
    console.log('docHeight: ', docHeight);
    
    if(docHeight > winHeight) {
        console.log('docHeight > winHeight: ', docHeight, ' > ', winHeight);
        //return;
    }

    var fixedHeight = 0;
    var totalHeight = 0;
    var numAutoHght = 0;
    rows.each(function (idx, row) {
        var has = $(row).hasClass('auto-height');
        var ht = $(row).innerHeight();
        console.log('   ht: ', ht);
    var onh = $(row).outerHeight();
    console.log('   onh: ', onh);
    var onhm = $(row).outerHeight(true);
    console.log('   onhm: ', onhm);
        var rht = $(row).height();
        console.log('   rht: ', rht);
        if(has) {
            numAutoHght++;
            var cellMax = 0;
            $(this).children('.cell').each(function(idx2, cell) {
                var cellHeight = $(cell).outerHeight(true);
                console.log('      cellHeight', cellHeight);
                cellMax = Math.max(cellMax, cellHeight);
            });
                console.log('   cell max', cellMax);
            totalHeight += cellMax;
        } else {
            totalHeight += ht;
            fixedHeight += ht;
        }
    console.log('   totalHeight: ', totalHeight);
    });
    console.log('fixedHeight: ', fixedHeight);
    console.log('totalHeight: ', totalHeight);
    console.log('numAutoHght: ', numAutoHght);
    
    if(numAutoHght < 1) {
        console.log('less than 1 auto height: ', numAutoHght);
        return;
    }
    
    var diff = winHeight - fixedHeight;
    console.log('dff height: ', diff);
    
    var eachRow = diff / numAutoHght;
    console.log('eachRow height: ', eachRow);
    
    var autoRows = $('.content-body .row.auto-height').filter(':visible');
    autoRows.each(function (idx) {
        $(this).height(eachRow);
    });
}