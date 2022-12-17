var options = {
    // colors: ["#695eef", "#ffc061", "#ff7f41"],
    series: [],
    chart: {
        type: "area",
        stacked: false,
        height: 350,
        zoom: {
            type: "x",
            enabled: true,
            autoScaleYaxis: true,
        },
        toolbar: {
            autoSelected: "zoom",
        },
    },
    dataLabels: {
        enabled: false,
    },
    markers: {
        size: 5,
        colors: ["#ffffff"],
        // strokeColor: ["#695eef", "#ffc061", "#ff7f41"],
        strokeWidth: 3
    },
    title: {
        text: "Grafik ",
        align: "left",
    },
    fill: {
        type: "gradient",
        gradient: {
            shadeIntensity: 1,
            inverseColors: false,
            opacityFrom: 0.5,
            opacityTo: 0,
            stops: [0, 90, 100],
        },
    },
    xaxis: {
        type: 'datetime',
        labels: {
            showDuplicates: false,
            format: 'yyyy'
        }
    },
    yaxis: [
        {
            axisTicks: {
                show: true,
            },
            // labels: {
            //     formatter: function (value) {
            //         return  "Rp."+numberFormat(value);
            //     }
            // },
        },
    ],
    tooltip: {
        shared: false,
        // y: {
        //     formatter: (val) => {
        //         let b = val.toString().replace(/[^\d]/g,""),
        //             panjang = b.length,
        //             j = 0,
        //             c = ""

        //         for (i = panjang; i > 0; i--) {
        //             j = j + 1;

        //             if (((j % 3) == 1) && (j != 1)) {
        //                 c = b.substr(i-1,1) + "." + c;
        //             } else {
        //                 c = b.substr(i-1,1) + c;
        //             }
        //         }

        //         return `Rp. ${c}`
        //     }
        // },
        x: {
            formatter: (val) => {
                return new Date(val).getFullYear()
            }
        },
    },
    noData: {
        text: 'Loading...'
    }
};

var chartExample = new ApexCharts(
    document.getElementById("chartExample"),
    options
);
chartExample.render();

async function getGraphicData() {
    const res = await fetch($('meta[name="base-url"]').attr('content') + `/apps/dashboard/get-graphic-data`, {
        headers: {
            accept: 'application/json'
        }
    })

    if(res.status == 200) {
        var data = await res.json()
        var series = [
            // {
            //     name: 'Modal',
            //     data: data.modal.map((val) => {
            //         return [new Date(val[0]).valueOf(), val[1]]
            //     })
            // },
            // {
            //     name: 'Surplus',
            //     data: data.surplus.map((val) => {
            //         return [new Date(val[0]).valueOf(), val[1]]
            //     })
            // },
            // {
            //     name: 'Pades',
            //     data: data.pades.map((val) => {
            //         return [new Date(val[0]).valueOf(), val[1]]
            //     })
            // },
        ]
        data.map((val) => {
            console.log(val)

        })
        chartExample.updateSeries(series)
    }
}

// getGraphicData()