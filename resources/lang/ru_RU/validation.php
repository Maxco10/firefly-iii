<?php

/**
 * validation.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


declare(strict_types=1);

return [
    'missing_where'                  => 'Array is missing "where"-clause',
    'missing_update'                 => 'Array is missing "update"-clause',
    'invalid_where_key'              => 'JSON contains an invalid key for the "where"-clause',
    'invalid_update_key'             => 'JSON contains an invalid key for the "update"-clause',
    'invalid_query_data'             => 'There is invalid data in the %s:%s field of your query.',
    'invalid_query_account_type'     => 'Your query contains accounts of different types, which is not allowed.',
    'invalid_query_currency'         => 'Your query contains accounts that have different currency settings, which is not allowed.',
    'iban'                           => 'Это некорректный IBAN.',
    'zero_or_more'                   => 'Это значение не может быть отрицательным.',
    'date_or_time'                   => 'Значение должно быть корректной датой или временем (ISO 8601).',
    'source_equals_destination'      => 'Счёт источник и счёт назначения совпадают.',
    'unique_account_number_for_user' => 'Этот номер счёта уже используется.',
    'unique_iban_for_user'           => 'Этот IBAN уже используется.',
    'deleted_user'                   => 'По соображениям безопасности, вы не можете зарегистрироваться, используя этот адрес электронной почты.',
    'rule_trigger_value'             => 'Это значение является недопустимым для выбранного триггера.',
    'rule_action_value'              => 'Это значение является недопустимым для выбранного действия.',
    'file_already_attached'          => 'Загруженный файл ":name" уже прикреплён к этому объекту.',
    'file_attached'                  => 'Файл ":name". успешно загружен.',
    'must_exist'                     => 'ID в поле field :attribute не существует в базе данных.',
    'all_accounts_equal'             => 'Все счета в данном поле должны совпадать.',
    'group_title_mandatory'          => 'Название группы является обязательным, если транзакций несколько.',
    'transaction_types_equal'        => 'Все части транзакции должны быть одного типа.',
    'invalid_transaction_type'       => 'Недопустимый тип транзакции.',
    'invalid_selection'              => 'Вы сделали неправильный выбор.',
    'belongs_user'                   => 'Данное значение недопустимо для этого поля.',
    'at_least_one_transaction'       => 'Необходима как минимум одна транзакция.',
    'at_least_one_repetition'        => 'Необходима как минимум одна транзакция.',
    'require_repeat_until'           => 'Требуется либо несколько повторений, либо конечная дата (repeat_until). Но не оба параметра разом.',
    'require_currency_info'          => 'Содержимое этого поля недействительно без информации о валюте.',
    'not_transfer_account'           => 'Этот счёт нельзя использовать для перевода.',
    'require_currency_amount'        => 'Содержимое этого поля недействительно без информации о валюте.',
    'require_foreign_currency'       => 'Это поле требует число',
    'require_foreign_dest'           => 'Это значение поля должно совпадать с валютой счета назначения.',
    'require_foreign_src'            => 'Это поле должно совпадать с валютой исходного счета.',
    'equal_description'              => 'Описание транзакции не должно совпадать с глобальным описанием.',
    'file_invalid_mime'              => 'Файл ":name" имеет тип ":mime". Загрузка файлов такого типа невозможна.',
    'file_too_large'                 => 'Файл ":name" слишком большой.',
    'belongs_to_user'                => 'Значение :attribute неизвестно.',
    'accepted'                       => 'Необходимо принять :attribute.',
    'bic'                            => 'Это некорректный BIC.',
    'at_least_one_trigger'           => 'Правило должно иметь хотя бы одно условие.',
    'at_least_one_active_trigger'    => 'Правило должно иметь хотя бы один активный триггер.',
    'at_least_one_action'            => 'Правило должно иметь хотя бы одно действие.',
    'at_least_one_active_action'     => 'Правило должно иметь по крайней мере одно активное действие.',
    'base64'                         => 'Это некорректный формат для данных, зашифрованных с помощью base64.',
    'model_id_invalid'               => 'Данный ID кажется недопустимым для этой модели.',
    'less'                           => ':attribute должен быть меньше 10,000,000',
    'active_url'                     => ':attribute не является допустимым URL-адресом.',
    'after'                          => ':attribute должна быть позже :date.',
    'date_after'                     => 'Дата начала должна быть до даты окончания.',
    'alpha'                          => ':attribute может содержать только буквы.',
    'alpha_dash'                     => ':attribute может содержать только буквы, числа и дефис.',
    'alpha_num'                      => ':attribute может содержать только буквы и числа.',
    'array'                          => ':attribute должен быть массивом.',
    'unique_for_user'                => 'Уже существует запись с этим :attribute.',
    'before'                         => ':attribute должна быть раньше :date.',
    'unique_object_for_user'         => 'Это название уже используется.',
    'unique_account_for_user'        => 'Такое название счёта уже используется.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'between.numeric'            => ':attribute должен быть больше :min и меньше :max.',
    'between.file'               => ':attribute должен быть размером :min - :max килобайт.',
    'between.string'             => ':attribute должен содержать :min - :max символов.',
    'between.array'              => ':attribute должен содержать :min - :max элементов.',
    'boolean'                    => 'Поле :attribute должно быть истинным или ложным.',
    'confirmed'                  => ':attribute не совпадает с подтверждением.',
    'date'                       => ':attribute не является верной датой.',
    'date_format'                => ':attribute не совпадает с форматом :format.',
    'different'                  => ':attribute и :other не должны совпадать.',
    'digits'                     => ':attribute должно содержать :digits цифр.',
    'digits_between'             => ':attribute должен содержать :min - :max цифр.',
    'email'                      => ':attribute не является верным email адресом.',
    'filled'                     => 'Поле :attribute должно быть заполнено.',
    'exists'                     => 'Выбран неверный :attribute.',
    'image'                      => ':attribute должен быть изображением.',
    'in'                         => 'Выбранный :attribute не верный.',
    'integer'                    => ':attribute должно быть целым числом.',
    'ip'                         => ':attribute должен быть верным IP-адресом.',
    'json'                       => ':attribute должно быть верной JSON строкой.',
    'max.numeric'                => 'Значение :attribute не может быть больше :max.',
    'max.file'                   => 'Значение :attribute не может быть больше :max килобайт.',
    'max.string'                 => 'Значение :attribute не может быть больше :max символов.',
    'max.array'                  => 'Значение :attribute не может содержать более :max элементов.',
    'mimes'                      => ':attribute должен быть файлом типа :values.',
    'min.numeric'                => ':attribute должен быть минимум :min.',
    'lte.numeric'                => ':attribute должен быть меньше или равен :value.',
    'min.file'                   => ':attribute должен быть минимум :min килобайт.',
    'min.string'                 => 'Значение :attribute должно быть не меньше :min символов.',
    'min.array'                  => 'Значение :attribute должно содержать не меньше :min элементов.',
    'not_in'                     => 'Выбранный :attribute не верный.',
    'numeric'                    => ':attribute должен быть числом.',
    'numeric_native'             => 'Сумма должна быть числом.',
    'numeric_destination'        => 'Сумма назначения должна быть числом.',
    'numeric_source'             => 'Исходная сумма должна быть числом.',
    'regex'                      => 'Формат :attribute некорректен.',
    'required'                   => 'Поле :attribute является обязательным.',
    'required_if'                => 'Значение :attribute является обязательным, когда :other равное :value.',
    'required_unless'            => 'Поле :attribute является обязательным, если :other не входит в список :values.',
    'required_with'              => 'Поле :attribute является обязательным, когда есть :values.',
    'required_with_all'          => 'Поле :attribute является обязательным, когда есть :values.',
    'required_without'           => 'Поле :attribute является обязательным, когда отсутствует :values.',
    'required_without_all'       => ':attribute поле обязательно для заполнения, так как ни одно из :values не существует.',
    'same'                       => ':attribute и :other должны совпадать.',
    'size.numeric'               => ':attribute должен быть размером :size.',
    'amount_min_over_max'        => 'Минимальная сумма не может быть больше максимальной суммы.',
    'size.file'                  => ':attribute должен быть размером :size килобайт.',
    'size.string'                => ':attribute должен состоять из :size символов.',
    'size.array'                 => ':attribute должен содержать :size элементов.',
    'unique'                     => ':attribute уже занят.',
    'string'                     => 'Значение :attribute должно быть строкой.',
    'url'                        => 'Неверный формат ввода :attribute.',
    'timezone'                   => ':attribute должен быть в допустимом диапазоне.',
    '2fa_code'                   => ':attribute введен неверно.',
    'dimensions'                 => 'Недопустимые размеры изображения :attribute.',
    'distinct'                   => 'Поле :attribute содержит повторяющееся значение.',
    'file'                       => ':attribute должен быть файлом.',
    'in_array'                   => 'Поле :attribute не существует в :other.',
    'present'                    => 'Поле :attribute должно быть заполнено.',
    'amount_zero'                => 'Сумма не может быть равна нулю.',
    'current_target_amount'      => 'Текущая сумма должна быть меньше целевой суммы.',
    'unique_piggy_bank_for_user' => 'Название копилки должно быть уникальным.',
    'unique_object_group'        => 'Название группы должно быть уникальным',
    'starts_with'                => 'Значение должно начинаться с :values.',
    'unique_webhook'             => 'You already have a webhook with this combination of URL, trigger, response and delivery.',
    'unique_existing_webhook'    => 'У вас уже есть другой вебхук с этим сочетанием URL, триггер, ответа и доставки.',
    'same_account_type'          => 'Оба счета должны иметь один тип счета',
    'same_account_currency'      => 'Оба счета должны иметь одну и ту же валюту',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'secure_password'             => 'Это не безопасный пароль. Попробуйте еще раз. Подробнее можно узнать по ссылке https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Недопустимый тип для повторяющихся транзакций.',
    'valid_recurrence_rep_moment' => 'Неверный период повторения для данного типа повторений.',
    'invalid_account_info'        => 'Неверные данные о счёте.',
    'attributes'                  => [
        'email'                   => '"Адрес электронной почты"',
        'description'             => '"Описание"',
        'amount'                  => 'Сумма',
        'transactions.*.amount'   => 'сумма транзакции',
        'name'                    => '"Название"',
        'piggy_bank_id'           => 'ID копилки',
        'targetamount'            => '"Целевая сумма"',
        'opening_balance_date'    => 'дата начального баланса',
        'opening_balance'         => 'начальный баланс',
        'match'                   => '"Ключи для связи"',
        'amount_min'              => '"Минимальная сумма"',
        'amount_max'              => '"Максимальная сумма"',
        'title'                   => '"Заголовок"',
        'tag'                     => '"Метка"',
        'transaction_description' => 'описание транзакции',
        'rule-action-value.1'     => '"Значение действия #1"',
        'rule-action-value.2'     => '"Значение действия #2"',
        'rule-action-value.3'     => '"Значение действия #3"',
        'rule-action-value.4'     => '"Значение действия #4"',
        'rule-action-value.5'     => '"Значение действия #5"',
        'rule-action.1'           => '"Действие #1"',
        'rule-action.2'           => '"Действие #2"',
        'rule-action.3'           => '"Действие #3"',
        'rule-action.4'           => '"Действие #4"',
        'rule-action.5'           => '"Действие #5"',
        'rule-trigger-value.1'    => '"Значение условия #1"',
        'rule-trigger-value.2'    => '"Значение условия #2"',
        'rule-trigger-value.3'    => '"Значение условия #3"',
        'rule-trigger-value.4'    => '"Значение условия #4"',
        'rule-trigger-value.5'    => '"Значение условия #5"',
        'rule-trigger.1'          => '"Условие #1"',
        'rule-trigger.2'          => '"Условие #2"',
        'rule-trigger.3'          => '"Условие #3"',
        'rule-trigger.4'          => '"Условие #4"',
        'rule-trigger.5'          => '"Условие #5"',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'Для продолжения необходим действительный ID счёта-источника и/или действительное имя счёта.',
    'withdrawal_source_bad_data'  => 'Не удалось найти корректный счёт-источник при поиске ID ":id" или имени ":name".',
    'withdrawal_dest_need_data'   => 'Для продолжения необходим действительный ID счёта назначения и/или действительное имя счёта.',
    'withdrawal_dest_bad_data'    => 'Не удалось найти действительный счёт назначения при поиске ID ":id" или имени ":name".',

    'reconciliation_source_bad_data' => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data' => 'Не удалось найти корректный счёт-источник при поиске ID ":id" или имени ":name".',

    'deposit_source_need_data' => 'Для продолжения необходим действительный ID счёта-источника и/или действительное имя счёта.',
    'deposit_source_bad_data'  => 'Не удалось найти корректный счёт-источник при поиске ID ":id" или имени ":name".',
    'deposit_dest_need_data'   => 'Для продолжения необходим действительный ID счёта назначения и/или действительное имя счёта.',
    'deposit_dest_bad_data'    => 'Не удалось найти действительный счёт назначения при поиске ID ":id" или имени ":name".',
    'deposit_dest_wrong_type'  => 'Сохраняемый счёт назначения - некорректный.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'transfer_source_need_data' => 'Для продолжения необходим действительный ID счёта-источника и/или действительное имя счёта.',
    'transfer_source_bad_data'  => 'Не удалось найти корректный счёт-источник при поиске ID ":id" или имени ":name".',
    'transfer_dest_need_data'   => 'Для продолжения необходим действительный ID счёта назначения и/или действительное имя счёта.',
    'transfer_dest_bad_data'    => 'Не удалось найти действительный счёт назначения при поиске ID ":id" или имени ":name".',
    'need_id_in_edit'           => 'Каждая разделённая транзакция должна иметь transaction_journal_id (либо действительный ID, либо 0).',

    'ob_source_need_data'           => 'Для продолжения необходим действительный ID счёта-источника и/или действительное имя счёта.',
    'lc_source_need_data'           => 'Need to get a valid source account ID to continue.',
    'ob_dest_need_data'             => 'Для продолжения необходим действительный ID счёта назначения и/или действительное имя счёта.',
    'ob_dest_bad_data'              => 'Не удалось найти действительный счёт назначения при поиске ID ":id" или имени ":name".',
    'reconciliation_either_account' => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'      => 'Вы не можете использовать этот счёт в качестве счёта-источника.',
    'generic_invalid_destination' => 'Вы не можете использовать этот счёт в качестве счёта назначения.',

    'generic_no_source'      => 'Вы должны предоставить информацию об учетной записи источника.',
    'generic_no_destination' => 'Вы должны предоставить данные учетной записи назначения.',

    'gte.numeric' => 'Значение :attribute должно быть больше или равно :value.',
    'gt.numeric'  => 'Значение :attribute должно быть больше :value.',
    'gte.file'    => 'Размер файла в поле :attribute должен быть больше или равен :value Килобайт(а).',
    'gte.string'  => 'Значение :attribute должно быть больше или равно :value символам.',
    'gte.array'   => 'Значения поля :attribute должно включать :value элементов или больше.',

    'amount_required_for_auto_budget' => 'Нужно указать сумму.',
    'auto_budget_amount_positive'     => 'Сумма должна быть больше 0.',
    'auto_budget_period_mandatory'    => 'Период авто-бюджета - это обязательно поле.',

    // no access to administration:
    'no_access_user_group'            => 'У вас нет необходимых прав доступа для данного административного действия.',
];

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */
