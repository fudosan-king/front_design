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
            label: 'My First dataset',
            data: [10, 10, 80],
            backgroundColor: [
                '#EB5757',
                '#F2994A',
                '#F2C94C',
            ]
        }
    ]
  };

  new Chart(document.getElementById(id), {
    type: type,
    data: data,
    options: options
  });
}

['pie', 'doughnut'].forEach(function (type) {
  createChart(type + '-canvas1', type, {
    responsive: true,
    maintainAspectRatio: false,
    borderWidth: 0,
    legend: {
      display: false
    },
    plugins: {
      labels: {
        render: 'label'
      }
    }
  });
  createChart(type + '-canvas2', type, {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      labels: {
        render: 'percentage',
        fontColor: ['green', 'white', 'red'],
        precision: 2
      }
    }
  });
  createChart(type + '-canvas3', type, {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      labels: {
        render: 'percentage',
        fontColor: function (args) {
          var rgb = hexToRgb(args.dataset.backgroundColor[args.index]);
          var threshold = 140;
          var luminance = 0.299 * rgb.r + 0.587 * rgb.g + 0.114 * rgb.b;
          return luminance > threshold ? 'black' : 'white';
        },
        precision: 2
      }
    }
  });
  createChart(type + '-canvas4', type, {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      labels: {
        render: 'value',
        fontSize: 14,
        fontStyle: 'bold',
        fontColor: '#000',
        fontFamily: '"Lucida Console", Monaco, monospace'
      }
    }
  });
  createChart(type + '-canvas5', type, {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      labels: {
        render: function (args) {
          return '$' + args.value;
        },
        arc: true
      }
    }
  });
  createChart(type + '-canvas6', type, {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      labels: {
        render: 'label',
        arc: true,
        position: 'border'
      }
    }
  });
  createChart(type + '-canvas7', type, {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      labels: {
        render: 'label',
        fontColor: '#000',
        position: 'outside'
      }
    }
  });
  createChart(type + '-canvas8', type, {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      labels: {
        render: 'label',
        arc: true,
        fontColor: '#000',
        position: 'outside'
      }
    }
  });
  createChart(type + '-canvas10', type, {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      labels: {
        render: 'image',
        images: [
          { src: 'taiwan.png', width: 32, height: 22 },
          { src: 'jpan.png', width: 32, height: 22 },
          { src: 'usa.png', width: 32, height: 22 }
        ]
      }
    }
  });
  createChart(type + '-canvas11', type, {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      labels: [
        {
          render: 'label',
          position: 'outside'
        },
        {
          render: 'percentage'
        }
      ]
    }
  });
});
createChart('polarArea-canvas1', 'polarArea', {
  responsive: true,
  maintainAspectRatio: false,
  plugins: {
    labels: [
      {
        render: 'label',
        fontColor: '#000',
        position: 'outside'
      },
      {
        render: 'percentage',
        fontColor: ['green', 'white', 'red'],
        overlap: false,
        precision: 2
      }
    ]
  }
});

new Chart(document.getElementById('bar-canvas1'), {
  type: 'bar',
  data: {
    labels: ['January', 'February', 'March'],
    datasets: [
      {
        label: 'My First dataset',
        data: [50445, 33655, 15900],
        backgroundColor: [
          '#FF6384',
          '#36A2EB',
          '#FFCE56'
        ]
      }
    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      labels: {
        render: 'value'
      }
    }
  }
});

new Chart(document.getElementById('bar-canvas2'), {
  type: 'bar',
  data: {
    labels: ['January', 'February', 'March'],
    datasets: [
      {
        label: 'My First dataset',
        data: [50445, 33655, 15900],
        backgroundColor: [
          '#FF6384',
          '#FF6384',
          '#FF6384'
        ]
      },
      {
        label: 'My Second dataset',
        data: [40445, 23655, 35900],
        backgroundColor: [
          '#36A2EB',
          '#36A2EB',
          '#36A2EB'
        ]
      }
    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      labels: {
        render: 'percentage'
      }
    }
  }
});

new Chart(document.getElementById('bar-canvas3'), {
  type: 'bar',
  data: {
    labels: ['January', 'February', 'March'],
    datasets: [
      {
        label: 'My First dataset',
        data: [50445, 33655, 15900],
        backgroundColor: [
          '#FF6384',
          '#FF6384',
          '#FF6384'
        ]
      },
      {
        label: 'My Second dataset',
        data: [40445, 23655, 35900],
        backgroundColor: [
          '#36A2EB',
          '#36A2EB',
          '#36A2EB'
        ]
      }
    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      labels: {
        render: 'value'
      }
    },
    scales: {
      xAxes: [{
        stacked: true,
      }],
      yAxes: [{
        stacked: true
      }]
    }
  }
});