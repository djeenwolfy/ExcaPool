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
        // Определяем свойства модели, представление будет проходить циклом
        // по массиву услуг и генерировать элементы списка
        // для каждого вложенного пункта.
        services: [
            {
                name: 'Площадь',
                price:  255,
                active:true
            },{
                name: 'Дизайн',
                price: 400,
                active:false
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
        		active:false,
        		qwert:''
        	},
        	{	
        		name:"Длинна",
        		active:false,
        		qwert:''
        	},
        	{	
        		name:"Ширина",
        		active:false,
        		qwert:''
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
        total: function(){

            var total = 0;

            this.services.forEach(function(s){
                if (s.active){
                    total+= s.price;
                }
           
            });


          if (this.Discount[0].active){
          total = total/100*(100-this.Discount[0].discount2);
           }
           return total;
        }
    }
});

  });

 