
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

                total_amount  = parseInt(amount) * 1.22 * 107;

            }else{


                total_amount  = parseInt(amount) * 1.22 * 5.6;
            }

        }else if (currency === 'GBP') {


            if (exchangeCurrency === 'KES') {

                 total_amount  = parseInt(amount) * 1.37 * 107;

            }else{


                total_amount  = parseInt(amount)  * 1.37 *5.6;
            }

        }else if (currency === 'USD') {


            if (exchangeCurrency === 'KES') {

                total_amount  = parseInt(amount) * 1 * 107;

            }else{

                total_amount  = parseInt(amount) *1* 5.6;
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

                total_amount  = parseInt(amount) * 1.22 * 107;

            }else{


                total_amount  = parseInt(amount) * 1.22 * 5.6;
            }

        }else if (currency === 'GBP') {


            if (exchangeCurrency === 'KES') {

                 total_amount  = parseInt(amount) * 1.37 * 107;

            }else{


                total_amount  = parseInt(amount)  * 1.37 *5.6;
            }

        }else if (currency === 'USD') {


            if (exchangeCurrency === 'KES') {

                total_amount  = parseInt(amount) * 1 * 107;

            }else{

                total_amount  = parseInt(amount) *1* 5.6;
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

                total_amount  = parseInt(amount) * 1.22 * 107;

            }else{


                total_amount  = parseInt(amount) * 1.22 * 5.6;
            }

        }else if (currency === 'GBP') {


            if (exchangeCurrency === 'KES') {

                 total_amount  = parseInt(amount) * 1.37 * 107;

            }else{


                total_amount  = parseInt(amount)  * 1.37 *5.6;
            }

        }else if (currency === 'USD') {


            if (exchangeCurrency === 'KES') {

                total_amount  = parseInt(amount) * 1 * 107;

            }else{

                total_amount  = parseInt(amount) *1* 5.6;
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

                total_amount  = parseInt(amount) * 1.22 * 107;

            }else{


                total_amount  = parseInt(amount) * 1.22 * 5.6;
            }

        }else if (currency === 'GBP') {


            if (exchangeCurrency === 'KES') {

                 total_amount  = parseInt(amount) * 1.37 * 107;

            }else{


                total_amount  = parseInt(amount)  * 1.37 *5.6;
            }

        }else if (currency === 'USD') {


            if (exchangeCurrency === 'KES') {

                total_amount  = parseInt(amount) * 1 * 107;

            }else{

                total_amount  = parseInt(amount) *1* 5.6;
            }

        }


    }

       
        let _html = formatter.format(total_amount);
        
        $('#total_amount_to_recieve').html(_html);


    });





