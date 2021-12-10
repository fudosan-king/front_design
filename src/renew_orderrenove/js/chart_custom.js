function hexToRgb(hex) {
  // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
  var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
  hex = hex.replace(shorthandRegex, function (m, r, g, b) {
    return r + r + g + g + b + b;
  });

  var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  return result ? {
    r: parseInt(result[1], 16),
    g: parseInt(result[2], 16),
    b: parseInt(result[3], 16)
  } : null;
}

function createChart(id, type, options) {
  var data = {
    labels: ['管理費', '修繕積立金', 'ローン返済額'],
    datasets: [
        {
            // label: 'My First dataset',
            data: [10, 10, 80],
            backgroundColor: [
                '#5C5B5B',
                '#999999',
                '#CFAF6E',
            ],
            // color: [
            //   '#ffffff',
            //   '#ffffff',
            //   '#ffffff',
            // ],
            borderWidth: 0,
        }
    ],
  };
  Chart.defaults.global.defaultFontColor = 'white';

  new Chart(document.getElementById(id), {
    type: type,
    data: data,
    options: options,
  });
}



['pie'].forEach(function (type) {
    
  if( $(type + '-canvas1').length === 0 ) return;

  createChart(type + '-canvas1', type, {
    responsive: true,
    maintainAspectRatio: false,
    borderWidth: 0,
    legend: {
      labels: {
          fontColor: '#333333'
      },
      position: 'top',
    },
    plugins: {
      labels: {
        // render: 'label',
        // fontColor: ['#EB5757', '#F2994A', '#F2C94C'],  
      },
    },
  });
  
});

