$(function(){
	$('#fromdate').inputmask({
        mask: "sn99/m9/d9",
        definitions: {'s': {validator: "[۱1١]"},
                      'n': {validator: "[۳۴34٣٤]"},
                      'm': {validator: "[۰۱01٠١]"},
                      'd': {validator: "[۰۱۲۳0123٠١٢٣]"},
                      '9': {validator: "[۰۱۲۳۴۵۶۷۸۹0123456789٠١٢٣٤٥٦٧٨٩]"}
        }
    });
	$('#todate').inputmask({
        mask: "sn99/m9/d9",
        definitions: {'s': {validator: "[۱1١]"},
                      'n': {validator: "[۳۴34٣٤]"},
                      'm': {validator: "[۰۱01٠١]"},
                      'd': {validator: "[۰۱۲۳0123٠١٢٣]"},
                      '9': {validator: "[۰۱۲۳۴۵۶۷۸۹0123456789٠١٢٣٤٥٦٧٨٩]"}
        }
    });
	
	
	window.from = $("#fromdate").persianDatepicker({
			toolbox: {
                calendarSwitch: {
                    enabled: false
                }
            },
		    initialValue:false,
			initialValueType: 'persian',
			observer: true,
			autoClose: true,
			calendarType: 'persian',
			format: 'YYYY/MM/DD',
            maxDate: new persianDate().add('day', 0).valueOf(),
            onSelect: function (unix) {
			from.touched = true;
			if(from.touched == true){
			document.getElementById("todate").value=null;
			window.to = $("#todate").persianDatepicker({
			toolbox: {
                calendarSwitch: {
                    enabled: false
                }
            },
            initialValue: false,
			observer: true,
			autoClose: true,
			calendarType: 'persian',
			format: 'YYYY/MM/DD',
            maxDate: new persianDate().add('day', 0).valueOf(),
            onSelect: function (unix) {
                to.touched = true;
                if (from && from.options && from.options.maxDate != unix) {
                    var cachedValue = from.getState().selected.unixDate;
                    if (from.touched) {
                    }
                }
            }
        });
		}
                if (to && to.options && to.options.minDate != unix) {
                    var cachedValue = to.getState().selected.unixDate;
                    to.options = {minDate: unix};
                    if (to.touched) {
	
                    }
                }
            }
        });
	
	
	$("#todate").persianDatepicker({
			toolbox: {
                calendarSwitch: {
                    enabled: false
                }
            },
				initialValueType: 'persian',
            initialValue: false,
			observer: true,
			autoClose: true,
			maxDate: new persianDate().add('day',0).valueOf(),
			calendarType: 'persian',
			format: 'YYYY/MM/DD',
	});

});
