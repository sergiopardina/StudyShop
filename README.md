<p align="center"><a href="//studyshop/" target="_blank"><img src="public/images/logo.png" alt="Logo"></a></p>

<p>We are a progressive team of young PHP specialists. Here is our final project.</p>
<p>Acknowledgements: to Anton Seryapov for providing comprehensive training and supervision throughout the entire course.</p>

To successfully use our application, you need to:

1. Have the NodeJS developer environment installed. You can install the full package (including npm) by following this link: https://nodejs.org/dist/v18.15.0/node-v18.15.0-x64.msi.
2. After installing NodeJS, it will automatically add the necessary changes to the environment variable path, so you don't have to worry about it.
3. You need to configure the domain. To do this, open the OpenServer settings, go to the "Domains" tab, and add a new path to the project directory, then to the "public" directory. Make sure you click "Add" before clicking "Save."
4. Once that's done, we need to determine if the Composer dependency manager is installed on your PC. To check, open PHP Storm, open the project, open the terminal, and type the "composer" command. If you see information about the manager in the console, then you can proceed to step 5 and run it in the PHP Storm internal terminal. If the dependency manager is not installed on your PC, we'll use the built-in Open Server console.
5. If you're working in the IDE terminal, you need to type the "npm -v" command to check the current version of the Node JS package manager. If the console displays the current version (for example, 9.5.0), everything is fine. The next command will start the developer environment, "npm install && npm run dev." For further manipulations with the application, you only need the command "npm run dev."
If you're working in the Open Server built-in console, you need to execute the command "set PATH=%PATH%;C:/Program Files/nodejs" (replace "Program Files" with another path if you chose a different one). This command will set the path in the environment variable. Then execute the same commands as for the IDE terminal. However, in the Open Server console, you will need to execute the full command "npm install && npm run dev" every time you start working with the application.
6. After completing these steps, the application should be displayed in the browser. Check this. If it is, you need to configure the .env file. Note that the APP_URL in the .env file should contain the actual path to the project on your PC. By default, it looks like "//studyshopgroup/." Set the necessary parameters for working with the database in the .env file.
7. Next, you need to execute the following commands:
    - php artisan migrate - to migrate tables
    - php artisan db:seed --class=UsersTableSeeder - to create test users. (The standard password is "password," and you'll need to change it when you first log into the system.)
    - php artisan storage:link
The project is ready for evaluation.
We may have missed something in it, but as they say, we didn't "not have time" but implemented the project by a few percent less than 100.

!!!Note that when creating new administrators, you will not be prompted to create a password. The password will be generated automatically and will consist of the first part of the administrator's email address, up to the "@" symbol (the mailbox name).
*******************************************************************************************************************************************************************************************************************************************
*********************************************************************************************************************************************************************
Для успешного использования нашего приложения Вам необходимо:
1. Иметь установленную среду разработчика NodeJS. Установку полного пакета (включая npm вы можете произвести по ссылке: https://nodejs.org/dist/v18.15.0/node-v18.15.0-x64.msi)
2. После установки NodeJS он автоматически добавит необходимые изменения в путь переменной среды, вам не стоит об этом беспокоится.
3. Вам необходимо настроить домен. Для этого откройте настройке OpenServer, перейдите во вкладку "Домены" и добавьте новый путь к директории проекта, а далее к директории "public:". Убедитесь, что вы нажали "Добавить", прежде чем нажимать "Сохранить".
4. После того, как это сделано, нам необходимо определится, установлен ли на Ваш ПК менеджер зависимостей Composer. Что бы это проверить - откройте PHP Storm, откройте проект, откройте терминал и пропишите команду "composer". Если в консоли появиться информация о менеджере, значит пункт 5, Вы можете выполнить во внутреннем терминале PHP Storm. Если же, менеджер зависимостей не установлен на Вашем ПК, мы воспользуемся встроенной консолью Open Server.
5. Если Вы работаете в терминале IDE - Вам необходимо прописать команду "npm -v", что бы проверить текущую версию менеджера пакетов Node JS. Если в консоль вам вывело текущую версию (например, 9.5.0) - все в порядке. Следующей командой вы запустите среду разработчика "npm install && npm run dev". При дальнейших манипуляциях с приложением, потребуется только команда "npm run dev"
   Если же вы работаете во встроенной консоли Open Server, Вам потребуется выполнить команду set PATH=%PATH%;C:/Program Files/nodejs (замените Program Files на другой путь, если вы его выбрали). Этой командой вы установите путь в переменную среды окружения. Затем выполняете такие же команды, как для терминала IDE. Однако, в консоли Open Servera при каждом новом старте работы с приложением, Вам необходимо будет выполнять полную команду "npm install && npm run dev".
6. После того, как эти шаги сделаны, приложение должно отобразиться в браузере. Проверьте это. Если это так, Вам необходимо настроить файл .env. Обратите внимание, что в .env APP_URL должен содержать актуальный путь к проекту на Вашем ПК. По стандарту он выглядит как "//studyshopgroup/". Установите необходимые параметры для работы с базой данных в файле .env
7. Далее Вам необходимо выполнить следующие команды:
    - php artisan migrate - для миграции таблиц
    - php artisan db:seed --class=UsersTableSeeder - для создания тестовых юзеров. (стандартный пароль "password" и Вам придется его сменить при первом входе в систему).
    - php artisan storage:link

Проект готов к оценке.
Может быть мы что-то и не доделали в нем, но как принято говорить, мы не "не успели", а выполнили реализацию проекта на несколько процентов меньше от 100.

!!!Обратите внимание, что при создании новых администраторов, Вам не будет предложено создать пароль. Пароль сгенерируется автоматически и будет состоять из первой части электронного адреса администратора, до символа @. (имя почтового ящика).

