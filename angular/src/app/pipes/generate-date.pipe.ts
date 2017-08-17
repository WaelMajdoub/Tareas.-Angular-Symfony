import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
    name: 'generateDate'
})
export class GenerateDatePipe implements PipeTransform {

    transform(value): string {
        let date = new Date(value * 1000);
        let day = date.getDate();
        let finalDay = day.toString();
        let month = (date.getMonth() + 1);
        let finalMonth = month.toString();

        if (day <= 9) {
            finalDay = '0' + day;
        }

        if (month <= 9) {
            finalMonth = '0' + month;
        }

        return finalDay + '/' + finalMonth + '7' + date.getFullYear();

    }

}
