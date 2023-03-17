<p align="center"><a href="//studyshop/" target="_blank"><img src="public/images/logo.png" alt="Logo"></a></p>

<p>We are a progressive team of young PHP specialists. Here is our final project.</p>
<p>Acknowledgements: to Anton Seryapov for providing comprehensive training and supervision throughout the entire course.</p>

To successfully use our application you need to:

1. Have the NodeJS developer environment installed. You can install the full package (including npm) by following this link: https://nodejs.org/dist/v18.15.0/node-v18.15.0-x64.msi
2. After installing NodeJS, it will automatically add the necessary changes to the environment variable path, so you don't need to worry about it.
3. If you already have a ready-made database, skip this step. If not, it's time to create one.
4. Let's create the original .env file from the instance and configure it (specify the name of your DB and, most importantly, run the php artisan key:generate command to generate a new application encryption key).
5. Execute the DB migrations using the command php artisan migrate.
6. To have some application data, run the seeders using two commands:
   - php artisan db:seed --class=UsersTableSeeder - creates user records (the default password is "password", which you will need to change on your first login).
   - php artisan db:seed --class=ProductsCharactersSeeder - creates test categories and product brands.
7. You need to set up the domain. To do this, open the OpenServer settings, go to the "Domains" tab, and add a new path to the project directory and then to the "public:" directory. Make sure you press "Add" before pressing "Save".
8. After this is done, we need to determine if the Composer dependency manager is installed on your PC. To check this, open PHP Storm, open the project, open the terminal, and type the "composer" command. If information about the manager appears in the console, you can run step 5 in the PHP Storm internal terminal. If the dependency manager is not installed on your PC, we will use the built-in Open Server console.
9. If you are working in the IDE terminal, you need to type the command "npm -v" to check the current version of the Node JS package manager. If the console displays the current version (e.g., 9.5.0), everything is fine. The next command you will run is "npm install && npm run dev". When working with the application in the future, you will only need to run the "npm run dev" command.
   If you are working in the Open Server built-in console, you will need to execute the command "set PATH=%PATH%;C:/Program Files/nodejs" (replace Program Files with a different path if you chose a different one). This command will set the path to the environment variable. Then you run the same commands as in the IDE terminal. However, in the Open Server console, every time you start working with the application, you will need to execute the full command "npm install && npm run dev".
10. After completing these steps, the application should be displayed in the browser. Check it. If it works, you need to configure the .env file. Note that the .env APP_URL must contain the correct path to the project on your PC. By default, it looks like "//studyshopgroup/". Set the required parameters for working with the database in the .env file.
11. And, of course, you need to create a symbolic link to the file storage so that it is visible to the browser:
    php artisan storage:link
    The project is ready for evaluation.
    There may be some unfinished parts, but as they say, we didn't "not have enough time", we have completed the project implementation a few percent less than 100.

!!!Note that when creating new administrators, you will not be prompted to create a password. The password will be automatically generated and will consist of the first part of the administrator's email address, up to the @ symbol (the name of the email address).

*******************************************************************************************************************************************************************************************************************************************
*********************************************************************************************************************************************************************


Для успешного использования нашего приложения Вам необходимо:
1. Иметь установленную среду разработчика NodeJS. Установку полного пакета (включая npm вы можете произвести по ссылке: https://nodejs.org/dist/v18.15.0/node-v18.15.0-x64.msi)
2. После установки NodeJS он автоматически добавит необходимые изменения в путь переменной среды, вам не стоит об этом беспокоится.
3. Если у вас уже есть готовая база данных - пропустите этот шаг, если нет - самое время её создать
4. Создадим оригинальный файл .env из экземпляра и настроим его (укажем название вашей БД и, главное, выполним команду php artisan key:generate для генерации нового приложения ключа шифрования)
5. Выполним миграции БД с помощью команды php artisan migrate.
6. Что бы мы имели некую наполняемость приложения - выполним отправку сидов двумя командами:
   - php artisan db:seed --class=UsersTableSeeder - создадим команду юзеров (стандартный пароль "password" и Вам придется его сменить при первом входе в систему).
   - php artisan db:seed --class=ProductsCharactersSeeder - создадим тестовые категории и бренды товаров.
7. Вам необходимо настроить домен. Для этого откройте настройке OpenServer, перейдите во вкладку "Домены" и добавьте новый путь к директории проекта, а далее к директории "public:". Убедитесь, что вы нажали "Добавить", прежде чем нажимать "Сохранить".
8. После того, как это сделано, нам необходимо определится, установлен ли на Ваш ПК менеджер зависимостей Composer. Что бы это проверить - откройте PHP Storm, откройте проект, откройте терминал и пропишите команду "composer". Если в консоли появиться информация о менеджере, значит пункт 5, Вы можете выполнить во внутреннем терминале PHP Storm. Если же, менеджер зависимостей не установлен на Вашем ПК, мы воспользуемся встроенной консолью Open Server.
9. Если Вы работаете в терминале IDE - Вам необходимо прописать команду "npm -v", что бы проверить текущую версию менеджера пакетов Node JS. Если в консоль вам вывело текущую версию (например, 9.5.0) - все в порядке. Следующей командой вы запустите среду разработчика "npm install && npm run dev". При дальнейших манипуляциях с приложением, потребуется только команда "npm run dev"
   Если же вы работаете во встроенной консоли Open Server, Вам потребуется выполнить команду set PATH=%PATH%;C:/Program Files/nodejs (замените Program Files на другой путь, если вы его выбрали). Этой командой вы установите путь в переменную среды окружения. Затем выполняете такие же команды, как для терминала IDE. Однако, в консоли Open Servera при каждом новом старте работы с приложением, Вам необходимо будет выполнять полную команду "npm install && npm run dev".
10. После того, как эти шаги сделаны, приложение должно отобразиться в браузере. Проверьте это. Если это так, Вам необходимо настроить файл .env. Обратите внимание, что в .env APP_URL должен содержать актуальный путь к проекту на Вашем ПК. По стандарту он выглядит как "//studyshopgroup/". Установите необходимые параметры для работы с базой данных в файле .env
11. Ну и, конечно, нужно создать символьную ссылку на хранилище файлов, что бы оно было видимым для браузера:
    - php artisan storage:link

Проект готов к оценке.
Может быть мы что-то и не доделали в нем, но как принято говорить, мы не "не успели", а выполнили реализацию проекта на несколько процентов меньше от 100.

!!!Обратите внимание, что при создании новых администраторов, Вам не будет предложено создать пароль. Пароль сгенерируется автоматически и будет состоять из первой части электронного адреса администратора, до символа @. (имя почтового ящика).

