
    $('input#amount_to_send').on('keyup', function () {


        let amount   = $('input#amount_to_send').val();
        let currency = $( "#myselect" ).val();
        let exchangeCurrency = $("#myselect2").val();
        let total_amount = 0;
        let formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: exchangeCurrency  ,
            });

     

    if (amount) {

        if (currency === 'EUR') {

            if (exchangeCurrency === 'KES') {

                total_amount  = parseInt(amount) * 141;

            }else if(exchangeCurrency === 'GHS'){

                total_amount  = parseInt(amount) * 7.6;

            }else{

                total_amount  = parseInt(amount) * 595;
            }

        }else if (currency === 'GBP') {


            if (exchangeCurrency === 'KES') {

                 total_amount  = parseInt(amount) * 158;

            }else if(exchangeCurrency === 'GHS'){

                total_amount  = parseInt(amount) * 8.5;

            }else{


                total_amount  = parseInt(amount) *660;
            }

        }else if (currency === 'USD') {


            if (exchangeCurrency === 'KES') {

                total_amount  = parseInt(amount)  * 116;

            }else if(exchangeCurrency === 'GHS'){

                total_amount  = parseInt(amount) * 6.2;

            }else{

                total_amount  = parseInt(amount) * 495;
            }

        }


    }

       
        let _html = formatter.format(total_amount);
        
        $('#total_amount_to_recieve').html(_html);




    });




     $('input#amount_to_send').on('click', function () {


        let amount   = $('input#amount_to_send').val();
        let currency = $( "#myselect" ).val();
        let exchangeCurrency = $("#myselect2").val();
        let total_amount = 0;
        let formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: exchangeCurrency  ,
            });

     

    if (amount) {

        if (currency === 'EUR') {

            if (exchangeCurrency === 'KES') {

                total_amount  = parseInt(amount) * 141;

            }else if(exchangeCurrency === 'GHS'){

                total_amount  = parseInt(amount) * 7.6;

            }else{

                total_amount  = parseInt(amount) * 595;
            }

        }else if (currency === 'GBP') {


            if (exchangeCurrency === 'KES') {

                 total_amount  = parseInt(amount) * 158;

            }else if(exchangeCurrency === 'GHS'){

                total_amount  = parseInt(amount) * 8.5;

            }else{


                total_amount  = parseInt(amount) *660;
            }

        }else if (currency === 'USD') {


            if (exchangeCurrency === 'KES') {

                total_amount  = parseInt(amount)  * 116;

            }else if(exchangeCurrency === 'GHS'){

                total_amount  = parseInt(amount) * 6.2;

            }else{

                total_amount  = parseInt(amount) * 495;
            }

        }


    }

       
        let _html = formatter.format(total_amount);
        
        $('#total_amount_to_recieve').html(_html);




    });


   
   

   //Other function 




    $('#myselect2').on('change', function () {


        let amount   = $('input#amount_to_send').val();
        let currency = $( "#myselect" ).val();
        let exchangeCurrency = $("#myselect2").val();
        let total_amount = 0;
        let formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: exchangeCurrency  ,
            });

     
 if (amount) {

        if (currency === 'EUR') {

            if (exchangeCurrency === 'KES') {

                total_amount  = parseInt(amount) * 141;

            }else if(exchangeCurrency === 'GHS'){

                total_amount  = parseInt(amount) * 7.6;

            }else{

                total_amount  = parseInt(amount) * 595;
            }

        }else if (currency === 'GBP') {


            if (exchangeCurrency === 'KES') {

                 total_amount  = parseInt(amount) * 158;

            }else if(exchangeCurrency === 'GHS'){

                total_amount  = parseInt(amount) * 8.5;

            }else{


                total_amount  = parseInt(amount) *660;
            }

        }else if (currency === 'USD') {


            if (exchangeCurrency === 'KES') {

                total_amount  = parseInt(amount)  * 116;

            }else if(exchangeCurrency === 'GHS'){

                total_amount  = parseInt(amount) * 6.2;

            }else{

                total_amount  = parseInt(amount) * 495;
            }

        }


    }
       
        let _html = formatter.format(total_amount);
        
        $('#total_amount_to_recieve').html(_html);


    });




//third function


    
    $('#myselect').on('change', function () {


        let amount   = $('input#amount_to_send').val();
        let currency = $( "#myselect" ).val();
        let exchangeCurrency = $("#myselect2").val();
        let total_amount = 0;
        let formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: exchangeCurrency  ,
            });

     
 if (amount) {

        if (currency === 'EUR') {

            if (exchangeCurrency === 'KES') {

                total_amount  = parseInt(amount) * 141;

            }else if(exchangeCurrency === 'GHS'){

                total_amount  = parseInt(amount) * 7.6;

            }else{

                total_amount  = parseInt(amount) * 595;
            }

        }else if (currency === 'GBP') {


            if (exchangeCurrency === 'KES') {

                 total_amount  = parseInt(amount) * 158;

            }else if(exchangeCurrency === 'GHS'){

                total_amount  = parseInt(amount) * 8.5;

            }else{


                total_amount  = parseInt(amount) *660;
            }

        }else if (currency === 'USD') {


            if (exchangeCurrency === 'KES') {

                total_amount  = parseInt(amount)  * 116;

            }else if(exchangeCurrency === 'GHS'){

                total_amount  = parseInt(amount) * 6.2;

            }else{

                total_amount  = parseInt(amount) * 495;
            }

        }


    }
       
        let _html = formatter.format(total_amount);
        
        $('#total_amount_to_recieve').html(_html);


    });







