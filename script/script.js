  $(document).ready(function(){
    $('.slider').slider({
  	 	interval:3500,
  	 	height: 640
  	 });
       $('.sidenav').sidenav();
            // Определяем собственный фильтр валют "currency". 
Vue.filter('currency', function (value) {
    return '$' + value.toFixed(2);
});
var demo = new Vue({
    el: '#main',
    data: {
        
        services: [
                    {
                name: 'Копка бассейна',
                price: 1000,
                active: false
            },
            {
                name: 'Гидроизоляция бассейна',
                price:  10000,
                active: false
            },
            {
                name: 'Облицовка бассейна',
                price: 4500,
                active: false
            },
            {
                name: 'Работа',
                price: 1500,
                active: false
            }
            ],

        Discount:[
            {
                name:'Скидка',
                active:false,
                discount2:5
            }
        ],
        m3:[
        	{	
        		name:"Глубина",
        		active:true,
        		qwert: 0
        	},
        	{	
        		name:"Длинна",
        		active:true,
        		qwert: 0
        	},
        	{	
        		name:"Ширина",
        		active:true,
        		qwert: 0
        	},
       	]

    },
    methods: {
        toggleActive: function(s){
            s.active = !s.active;
        },
        toggleDiscount:function(s){
            s.active = !s.active;
        },
        toggleTooltip: function(){
            this.kub_update = !this.kub_update;
        },
        objem: function(){

		var	objem = 1;

 		this.m3.forEach(function(s){
                if (s.active){
                    objem= objem*(+s.qwert);
                }
        });
         return objem;
    	},
        total: function(){
        			var	objem = 1;

 		this.m3.forEach(function(s){
                if (s.active){
                    objem= objem*(+s.qwert);
                }
        });
            var koef = 0;

            this.services.forEach(function(s){
                if (s.active){
                    koef+= s.price;
                }
           total=koef*objem
            });


          // if (this.Discount[0].active){
          // total = total/100*(100-this.Discount[0].discount2);
          //  }
           return total;
        }
    }
});

  });

 