// *** myMultiAxisChart_month ***
var ctx0 = document.getElementById('myMultiAxisChart_month').getContext('2d');

// Tạo các dữ liệu cho các trục
var data = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
    datasets: [
        {
            label: 'A部署',
            data: [-100, 20, 50, -30, 80, 60],
            backgroundColor: 'rgba(22, 99, 170, 1)',
            yAxisID: 'y-axis-1', // Trục y chính
            borderColor: 'rgba(22, 99, 170, 1)'
        },
        {
            label: 'B部署',
            data: [30, -40, 60, -20, 90, -70],
            backgroundColor: 'rgba(161, 85, 185, 1)',
            yAxisID: 'y-axis-1', // Trục y chính
            borderColor: 'rgba(161, 85, 185, 1)'
        },
        {
            label: 'C部署',
            data: [-50, 60, -80, 40, -70, 100],
            backgroundColor: 'rgba(247, 101, 163, 1)',
            yAxisID: 'y-axis-1', // Trục y phụ
            borderColor: 'rgba(247, 101, 163, 1)'
        }
    ]
};

var legendMarginTop = {
    id: 'legendMarginTop',
    afterInit(chart, args, options) {

    }
}

// Tạo tùy chọn cho biểu đồ
var options = {
    plugins: {
        legend: {
            position: 'bottom', // Đặt vị trí của label ở phía dưới
            align: 'start'
        }
    },
    scales: {
        x: {
            barPercentage: 1 // Đặt giá trị barPercentage tùy theo khoảng cách mong muốn
        },
        y: [
            {
                id: 'y-axis-1',
                type: 'linear',
                position: 'left',
            },
        ]
    }
};

var myMultiAxisChart_month = new Chart(ctx0, {
    type: 'line',
    data: data,
    options: options
});

// *** myMultiAxisChart_day ***
var ctx01 = document.getElementById('myMultiAxisChart_day').getContext('2d');

// Tạo các dữ liệu cho các trục
var data = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
    datasets: [
        {
            label: 'A部署',
            data: [-60, 10, 30, -40, 90, 60],
            backgroundColor: 'rgba(22, 99, 170, 1)',
            yAxisID: 'y-axis-1', // Trục y chính
            borderColor: 'rgba(22, 99, 170, 1)'
        },
        {
            label: 'B部署',
            data: [20, -30, 100, -10, 70, -70],
            backgroundColor: 'rgba(161, 85, 185, 1)',
            yAxisID: 'y-axis-1', // Trục y chính
            borderColor: 'rgba(161, 85, 185, 1)'
        },
        {
            label: 'C部署',
            data: [-30, 60, -90, 40, 70, 100],
            backgroundColor: 'rgba(247, 101, 163, 1)',
            yAxisID: 'y-axis-1', // Trục y phụ
            borderColor: 'rgba(247, 101, 163, 1)'
        }
    ]
};

// Tạo tùy chọn cho biểu đồ
var options = {
    plugins: {
        legend: {
            position: 'bottom', // Đặt vị trí của label ở phía dưới
            align: 'start'
        }
    },
    scales: {
        y: [
            {
                id: 'y-axis-1',
                type: 'linear',
                position: 'left',
            },
        ]
    },
};

var myMultiAxisChart_day = new Chart(ctx01, {
    type: 'line',
    data: data,
    options: options
});





var ctx02 = document.getElementById('myMultiAxisChart2').getContext('2d');

// Tạo các dữ liệu cho các trục
var data = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
    datasets: [
        {
            label: '',
            data: [-60, -20, -60, 40, 0, 100],
            borderColor: 'rgba(22, 99, 170, 1)',
            yAxisID: 'y-axis-1' // Trục y chính
        },
    ]
};

// Tạo tùy chọn cho biểu đồ
var options = {
    plugins: {
        legend: {
            display: false, // Ẩn legend key (ô màu và văn bản)
        }
    },
    scales: {
        y: [
            {
                id: 'y-axis-1',
                type: 'linear',
                position: 'left',
            },
        ]
    }
};

var myMultiAxisChart = new Chart(ctx02, {
    type: 'line',
    data: data,
    options: options
});


// *** myHorizontalBarChart ***
var ctx2 = document.getElementById('myHorizontalBarChart').getContext('2d');
var myHorizontalBarChart = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['山田 太郎', '山田 太郎', '山田 太郎', '山田 太郎', '山田 太郎'],
        datasets: [
            {
                label: '先月',
                data: [12, 19, 40, 17, 100, 120],
                backgroundColor: ['rgba(99, 171, 253, 1)'], // Màu nền của các thanh
                borderColor: ['rgba(22, 91, 170, 1)'], // Màu viền của các thanh
                borderWidth: 1
            },
            {
                label: '今月',
                data: [8, 10, 20, 30, 80, 120],
                backgroundColor: ['rgba(230, 151, 255, 1)'], // Màu nền của các thanh
                borderColor: ['rgba(161, 85, 185, 1)'], // Màu viền của các thanh
                borderWidth: 1
            }
        ]
    },
    options: {
        indexAxis: 'y',
        scales: {
            x: {
                beginAtZero: true
            }
        },
        plugins: {
            legend: {
                position: 'bottom', // Đặt vị trí của label ở phía dưới
                align: 'start'
            }
        }
    }
});





