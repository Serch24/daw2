window.onload = ()=>{
    var chart = new CanvasJS.Chart("bb",{
        theme: "ligth1",
        animationEnabled: false,
        title: {
            text: "Probando esto"
        },
        data:[
            {
                // Change type to "bar", "area", "spline", "pie",etc.
                type: "column",
                dataPoints: [
                    { label: "apple",  y: 10  },
                    { label: "orange", y: 15  },
                    { label: "banana", y: 25  },
                    { label: "mango",  y: 30  },
                    { label: "grape",  y: 28  }
                ]
            }
        ]
    })
    chart.render();
}