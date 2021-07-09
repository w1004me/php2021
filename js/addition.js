end_point = 1;
while(end_point)
{
    for(count = 0; count<4; count++)
    {
        switch(count)
        {
            case 0:
                str = "step : "+count+" : 연산할 숫자 입력";
                user_input_1 = Number(prompt(str));
                break;
            case 1:
                str = "step : "+count+"현재"+user_input_1+" : 연산할 기호 입력 =,-,*,/,e=end";
                input_symbol = prompt(str);
                if(input_symbol == 'e')
                {
                    document.write("연산 결과 : ",user_input_1);
                    end_point = 0;
                    count = 4;
                }
                break;
            case 2:
                str = "step : "+count+"현재"+user_input_1+" : 연산할 숫자 입력";
                user_input_2 = Number(prompt(str));
                    switch(input_symbol)
                    {
                        case '+':
                            user_input_1 += user_input_2;
                            break
                        case '-':
                            user_input_1 -= user_input_2;
                            break
                        case '*':
                            user_input_1 *= user_input_2;
                            break
                        case '/':
                            user_input_1 /= user_input_2;
                            break
                    }
                    count = 0;//후위증가로 인한 1 감소
                break
        }
    }
    
}