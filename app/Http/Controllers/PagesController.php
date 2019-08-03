<?php
/**
 * Created by PhpStorm.
 * User: sharkov
 * Date: 4.08.19
 * Time: 0:18
 */

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function __construct(){
        /**
         * @pagesConstructor
         *  Винаги се изпълнява
         *  Ще съдържа някакви проверки
         *  например дали потребителя е логнат
         */

    }

    public function pageRedict($page){
        switch ($page){
            case "best_sellers": {

                /**
                 * @pageBestSellers
                 * пренасочваме към най-продаваните продукти
                 */
                break;

            }
            case "new_product": {

                /**
                 * @pageNewProducts
                 * пренасочваме към най-новите продукти
                 */
                break;

            }
            case "promotions": {

                /**
                 * @pagePromotions
                 * пренасочваме към промоционалните продукти
                 */
                break;

            }
            default: {
                /**
                 * @pageHome
                 * пренасочваме към началната страница
                 * в тази default секция се влиза по подразбиране,
                 * ако не се влезе в никоя от останилите
                 */
                break;
            }
        }

    }

    public function shoppingCart(){
        /**
         * @pageShoppingCart
         * зареждаме количката на потребителя
         * правим проверка дали има продукти,
         * ако има ги показваме в таблица, ако не
         * показаме надпис 'Количката ви е празна'
        */

    }

    public function product(){
        /**
         * @pageProducts
         * зареждаме информацията за избрания от
         * потребителя продукт (снимки, описание,
         * цена, и др.)
         */

    }

    public function payments(){
        /**
         * @pagePayments
         * зареждаме наличните платежни методи
         * тази стъпка трябва да се изпълни само,
         * ако потребителя е преминал към плащане
         * на избраните от него продукти
         */

    }

    public function userSettings(){
        /**
         * @pageUserSettings
         * зареждаме информацията за потребителя
         * (име и фамилия, телефон, адрес, град,
         * пощенски код и др.)
         */

    }

    public function articles(){
        /**
         * @pageArticles
         * зареждаме наличните статии, това се прави
         * с цел да се привлече вниманието на потребителя
         * към ползите от конкретен продукт (за който се
         * говири в статията) и увеличаване на вероятноста
         * потребителя да закупи продукта
         */

    }

    public function contacts(){
        /**
         * @pageContacts
         * зареждаме формата за контакт с нас, тя трябва
         * да съдържа 3 полета за информация
         * 1) Име и фамилия
         * 2) E-mail за обратна връзка
         * 3) Поле в което потребителя да ни пише
         */

    }




}