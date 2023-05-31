<?php

add_shortcode('progressive_chart', 'progressive_chart');
function progressive_chart($atts)
{
  ob_start(); ?>
<!-- Import external scripts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-annotation"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-moment@0.1.1"></script>
<canvas id="progressChart" height="543"></canvas>
<script type="text/javascript">
// Define mock data
const data = [{
    month: '2022-04-30',
    value: 1755
  }, {
    month: '2022-05-01',
    value: 1715
  }, {
    month: '2022-05-02',
    value: 1755
  }, {
    month: '2022-05-03',
    value: 1680
  }, {
    month: '2022-05-05',
    value: 1720
  }, {
    month: '2022-05-08',
    value: 1700
  }, {
    month: '2022-05-09',
    value: 1702
  }, {
    month: '2022-05-12',
    value: 1655
  }, {
    month: '2022-05-16',
    value: 1647
  }, {
    month: '2022-05-18',
    value: 1651
  },
  {
    month: '2022-05-19',
    value: 1670
  }, {
    month: '2022-05-20',
    value: 1636
  }, {
    month: '2022-05-27',
    value: 1660
  },
  {
    month: '2022-05-29',
    value: 1639
  },
  {
    month: '2022-06-04',
    value: 1642
  }, {
    month: '2022-06-10',
    value: 1690
  }, {
    month: '2022-06-15',
    value: 1700
  }, {
    month: '2022-06-20',
    value: 1710
  }, {
    month: '2022-06-22',
    value: 1700
  }, {
    month: '2022-06-25',
    value: 1730
  }, {
    month: '2022-06-30',
    value: 1710
  }, {
    month: '2022-07-01',
    value: 1700
  }, {
    month: '2022-07-02',
    value: 1780
  }, {
    month: '2022-07-10',
    value: 1775
  }, {
    month: '2022-07-15',
    value: 1770
  }, {
    month: '2022-07-20',
    value: 1768
  }, {
    month: '2022-07-22',
    value: 1780
  }, {
    month: '2022-08-01',
    value: 1732
  }, {
    month: '2022-08-03',
    value: 1770
  }, {
    month: '2022-08-05',
    value: 1750
  }, {
    month: '2022-08-10',
    value: 1755
  }, {
    month: '2022-08-15',
    value: 1785
  }, {
    month: '2022-08-20',
    value: 1790
  }, {
    month: '2022-08-22',
    value: 1800
  }, {
    month: '2022-08-25',
    value: 1790
  }, {
    month: '2022-09-01',
    value: 1802
  }, {
    month: '2022-09-04',
    value: 1820
  }, {
    month: '2022-09-10',
    value: 1815
  }, {
    month: '2022-09-16',
    value: 1830
  }, {
    month: '2022-09-20',
    value: 1822
  }, {
    month: '2022-09-25',
    value: 1825
  }, {
    month: '2022-09-30',
    value: 1835
  }, {
    month: '2022-10-01',
    value: 1810
  }, {
    month: '2022-10-05',
    value: 1817
  }, {
    month: '2022-10-12',
    value: 1820
  }, {
    month: '2022-10-16',
    value: 1827
  }, {
    month: '2022-10-20',
    value: 1836
  }, {
    month: '2022-10-22',
    value: 1840
  }, {
    month: '2022-10-25',
    value: 1845
  }, {
    month: '2022-10-30',
    value: 1850
  }, {
    month: '2022-11-01',
    value: 1842
  }, {
    month: '2022-11-02',
    value: 1830
  }, {
    month: '2022-11-05',
    value: 1838
  }, {
    month: '2022-11-10',
    value: 1845
  }, {
    month: '2022-11-12',
    value: 1823
  }, {
    month: '2022-11-16',
    value: 1826
  }, {
    month: '2022-11-20',
    value: 1830
  }, {
    month: '2022-11-25',
    value: 1838
  }, {
    month: '2022-11-23',
    value: 1835
  }, {
    month: '2022-11-26',
    value: 1832
  }, {
    month: '2022-11-30',
    value: 1836
  }, {
    month: '2022-12-01',
    value: 1839
  }, {
    month: '2022-12-04',
    value: 1842
  }, {
    month: '2022-12-09',
    value: 1840
  }, {
    month: '2022-12-12',
    value: 1837
  }, {
    month: '2022-12-14',
    value: 1835
  }, {
    month: '2022-12-18',
    value: 1830
  }, {
    month: '2022-12-20',
    value: 1834
  }, {
    month: '2022-12-22',
    value: 1836
  }, {
    month: '2022-12-24',
    value: 1838
  }, {
    month: '2022-12-26',
    value: 1840
  }, {
    month: '2022-12-30',
    value: 1843
  }, {
    month: '2023-01-01',
    value: 1846
  }, {
    month: '2023-01-03',
    value: 1848
  }, {
    month: '2023-01-06',
    value: 1847
  }, {
    month: '2023-01-09',
    value: 1850
  }, {
    month: '2023-01-13',
    value: 1852
  }, {
    month: '2023-01-15',
    value: 1855
  }, {
    month: '2023-01-18',
    value: 1853
  }, {
    month: '2023-01-20',
    value: 1857
  }, {
    month: '2023-01-24',
    value: 1854
  }, {
    month: '2023-01-26',
    value: 1859
  }, {
    month: '2023-01-28',
    value: 1860
  }, {
    month: '2023-01-30',
    value: 1858
  }, {
    month: '2023-02-03',
    value: 1855
  }, {
    month: '2023-02-05',
    value: 1853
  }, {
    month: '2023-02-06',
    value: 1852
  }, {
    month: '2023-02-10',
    value: 1850
  }, {
    month: '2023-02-13',
    value: 1855
  }, {
    month: '2023-02-15',
    value: 1858
  }, {
    month: '2023-02-18',
    value: 1860
  }, {
    month: '2023-02-20',
    value: 1865
  }, {
    month: '2023-02-25',
    value: 1860
  }, {
    month: '2023-02-26',
    value: 1876
  }, {
    month: '2023-03-02',
    value: 1868
  }, {
    month: '2023-03-03',
    value: 1864
  }, {
    month: '2023-03-05',
    value: 1862
  }, {
    month: '2023-03-08',
    value: 1867
  }, {
    month: '2023-03-10',
    value: 1864
  }, {
    month: '2023-03-14',
    value: 1865
  }, {
    month: '2023-03-16',
    value: 1868
  }, {
    month: '2023-03-19',
    value: 1862
  }, {
    month: '2023-03-20',
    value: 1864
  }, {
    month: '2023-03-23',
    value: 1850
  }, {
    month: '2023-03-25',
    value: 1855
  }, {
    month: '2023-03-27',
    value: 1840
  }, {
    month: '2023-03-29',
    value: 1848
  }, {
    month: '2023-03-30',
    value: 1830
  }, // Add more data points as needed
];

let progressChart;

const getOrCreateTooltip = (chart) => {
  let tooltipEl = chart.canvas.parentNode.querySelector('.progressive-tooltip');

  if (!tooltipEl) {
    tooltipEl = document.createElement('div');
    tooltipEl.classList.add('progressive-tooltip');

    // Add a dotted line to the element
    const dottedLine = document.createElement('div');
    dottedLine.classList.add("dotted-line");

    // Make a dotted line with 7dots
    new Array(7).fill(0).forEach(() => {
      const dotDimension = '3px'
      const dot = document.createElement('div');
      dot.style.backgroundColor = '#bbb';
      dot.style.width = dotDimension;
      dot.style.height = dotDimension;
      dot.style.borderRadius = '50%';

      dottedLine.appendChild(dot);
    })

    // Add a table and tooltip element
    const table = document.createElement('table');
    table.classList.add("tooltip-table");

    tooltipEl.appendChild(table);
    tooltipEl.appendChild(dottedLine);
    chart.canvas.parentNode.appendChild(tooltipEl);
  }

  return tooltipEl;
};

const externalTooltipHandler = (context) => {
  // Tooltip Element
  const {
    chart,
    tooltip
  } = context;
  const tooltipEl = getOrCreateTooltip(chart);

  // Hide if no tooltip
  if (tooltip.opacity === 0) {
    tooltipEl.style.opacity = 0;
    return;
  }

  // Set Tooltip Text
  if (tooltip.body) {
    const titleLines = tooltip.title || [];
    const bodyLines = tooltip.body.map(b => b.lines);

    const tableHead = document.createElement('thead');
    bodyLines.forEach((body, i) => {
      const colors = tooltip.labelColors[i];

      const tr = document.createElement('tr');
      tr.style.backgroundColor = 'inherit';
      tr.style.borderWidth = 0;
      tr.style.margin = 0;
      tr.style.padding = 0;

      const th = document.createElement('th');
      th.style.borderWidth = 0;
      th.style.margin = 0;
      th.style.padding = 0;
      th.style.fontSize = "16px";
      th.style.lineHeight = "24px";
      th.style.color = "#1E1E1E";

      const text = document.createTextNode(body[0].replace(/\,/g, '') + ' kr.');

      th.appendChild(text);
      tr.appendChild(th);
      if (!tableHead.querySelector('tr')) {
        tableHead.appendChild(tr);
      }
    });

    const tableBody = document.createElement('tbody');
    titleLines.forEach(title => {

      const date = new Date(title);
      const day = date.getDate();
      const month = date.toLocaleString('default', {
        month: 'short'
      }); // Note: Month is zero-based, so we add 1
      const year = date.getFullYear();

      const tr = document.createElement('tr');
      tr.style.borderWidth = 0;
      tr.style.margin = 0;
      tr.style.padding = 0;

      const td = document.createElement('td');
      td.style.borderWidth = 0;
      td.style.margin = 0;
      td.style.padding = 0;
      td.style.fontSize = "14px";
      td.style.lineHeight = "20px";
      td.style.color = '#A8AAAE';

      const text = document.createTextNode(month + ' ' + day + ', ' + year);
      td.appendChild(text);
      tr.appendChild(td);
      tableBody.appendChild(tr);
    });

    const tableRoot = tooltipEl.querySelector('table');

    // Remove old children
    while (tableRoot.firstChild) {
      tableRoot.firstChild.remove();
    }

    // Add new children
    tableRoot.appendChild(tableHead);
    tableRoot.appendChild(tableBody);
  }

  const {
    offsetLeft: positionX,
    offsetTop: positionY
  } = chart.canvas;

  // Display, position, and set styles for font
  tooltipEl.style.opacity = 1;
  tooltipEl.style.left = positionX + tooltip.caretX + 'px';
  tooltipEl.style.top = positionY + tooltip.caretY - 130 + 'px';
  tooltipEl.style.font = tooltip.options.bodyFont.string;
  tooltipEl.style.padding = tooltip.options.padding + 'px' + tooltip.options.padding + 'px ';
};

initializeChart();

function initializeChart() {
  var canvas = document.getElementById('progressChart');

  var ctx = canvas.getContext('2d');

  var minValue = Math.min(...data.map(point => point.value));
  var maxValue = Math.max(...data.map(point => point.value));

  // Add custom points for the minimum and maximum values
  var minIndex = data.findIndex(point => point.value === minValue);
  var maxIndex = data.findIndex(point => point.value === maxValue);

  data.splice(minIndex + 1, 0, {
    month: data[minIndex].month,
    value: minValue,
    isCustom: true
  });

  data.splice(maxIndex + 1, 0, {
    month: data[maxIndex].month,
    value: maxValue,
    isCustom: true
  });

  // Chart options
  var chartOptions = {
    type: 'line',
    data: {
      labels: data.map(item => new Date(item.month)),
      datasets: [{
        data: data.map(item => item.value),
        borderColor: '#CFB376',
        backgroundColor: '#1E1E1E',
        borderWidth: 1.5,
        radius: 0,
        pointRadius: function(context) {
          if (context.dataIndex === minIndex || context.dataIndex === maxIndex + 1) {
            return 6;
          }
          return 0;
        },
        borderWidth: function(context) {
          if (context.dataIndex === minIndex || context.dataIndex === maxIndex + 1) {
            return 2;
          }
          return 1.5;
        },
        pointBackgroundColor: function(context) {
          if (context.dataIndex === minIndex || context.dataIndex === maxIndex + 1) {
            return '#F8F8F8';
          }
          return '#1E1E1E';
        },
        pointBorderColor: function(context) {
          if (context.dataIndex === minIndex || context.dataIndex === maxIndex + 1) {
            return '#CFB376';
          }
          return 'transparent';
        },
      }],
    },
    options: {
      interaction: {
        intersect: false
      },
      plugins: {
        legend: false,
        tooltip: {
          enabled: false,
          external: externalTooltipHandler
        },
        annotation: {
          annotations: {
            min: {
              type: 'label',
              xValue: data[minIndex].month,
              yValue: minValue - 15,
              color: '#CFB376',
              content: [`▽ ${minValue}`],
              font: {
                size: 14
              }
            },
            max: {
              type: 'label',
              xValue: data[maxIndex].month,
              yValue: maxValue + 15,
              color: '#CFB376',
              content: [`△ ${maxValue}`],
              font: {
                size: 14
              }
            }
          }
        }
      },
      elements: {
        point: {
          borderWidth: 10,
          borderColor: '#1E1E1E',
        },
      },
      responsive: true,
      scales: {
        x: {
          type: 'time',
          time: {
            unit: 'month',
            displayFormats: {
              month: 'MMM YYYY' // Format for displaying month and year
            }
          },
          grid: {
            display: false
          },
          ticks: {
            font: {
              size: 14,
            },
            callback: function(value, index, values) {
              const date = new Date(values[index].value);
              const month = date.toLocaleString('default', {
                month: 'short'
              });
              // Note: Month is zero-based, so we add 1
              const year = date.getFullYear();
              if (index != 0) {
                const lastLabeldate = new Date(values[index - 1].value);
                const lastMonth = lastLabeldate.toLocaleString('default', {
                  month: 'short'
                });
                // Note: Month is zero-based, so we add 1
                const lastYear = lastLabeldate.getFullYear();
                if (year === lastYear) {
                  return month;
                } else {
                  return [month, year];
                }
              } else {
                return [month, year];
              }
            }
          }
        },
        y: {
          display: true,
          position: 'right',
          ticks: {
            font: {
              size: 14,
            },
            callback: function(value, index, values) {
              return value + ' kr.';
            }
          },
          border: {
            display: false
          },
          scaleLabel: {
            display: true,
            labelString: '300'
          }
        },
      },
    },
  };
  // Create the chart
  progressChart = new Chart(ctx, chartOptions);
}

window.addEventListener('resize', function() {
  progressChart.destroy();
  initializeChart();
  // Reinitialize the chart
});
</script>
<?php $html = ob_get_clean();
  return $html;
}