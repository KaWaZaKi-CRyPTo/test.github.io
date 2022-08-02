<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 19,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 20,
                'title' => 'stock_access',
            ],
            [
                'id'    => 21,
                'title' => 'vidange_access',
            ],
            [
                'id'    => 22,
                'title' => 'prodouit_create',
            ],
            [
                'id'    => 23,
                'title' => 'prodouit_edit',
            ],
            [
                'id'    => 24,
                'title' => 'prodouit_show',
            ],
            [
                'id'    => 25,
                'title' => 'prodouit_delete',
            ],
            [
                'id'    => 26,
                'title' => 'prodouit_access',
            ],
            [
                'id'    => 27,
                'title' => 'fourniseur_create',
            ],
            [
                'id'    => 28,
                'title' => 'fourniseur_edit',
            ],
            [
                'id'    => 29,
                'title' => 'fourniseur_show',
            ],
            [
                'id'    => 30,
                'title' => 'fourniseur_delete',
            ],
            [
                'id'    => 31,
                'title' => 'fourniseur_access',
            ],
            [
                'id'    => 32,
                'title' => 'parc_access',
            ],
            [
                'id'    => 33,
                'title' => 'bus_create',
            ],
            [
                'id'    => 34,
                'title' => 'bus_edit',
            ],
            [
                'id'    => 35,
                'title' => 'bus_show',
            ],
            [
                'id'    => 36,
                'title' => 'bus_delete',
            ],
            [
                'id'    => 37,
                'title' => 'bus_access',
            ],
            [
                'id'    => 38,
                'title' => 'oil_create',
            ],
            [
                'id'    => 39,
                'title' => 'oil_edit',
            ],
            [
                'id'    => 40,
                'title' => 'oil_show',
            ],
            [
                'id'    => 41,
                'title' => 'oil_delete',
            ],
            [
                'id'    => 42,
                'title' => 'oil_access',
            ],
            [
                'id'    => 43,
                'title' => 'provenance_create',
            ],
            [
                'id'    => 44,
                'title' => 'provenance_edit',
            ],
            [
                'id'    => 45,
                'title' => 'provenance_show',
            ],
            [
                'id'    => 46,
                'title' => 'provenance_delete',
            ],
            [
                'id'    => 47,
                'title' => 'provenance_access',
            ],
            [
                'id'    => 48,
                'title' => 'route_create',
            ],
            [
                'id'    => 49,
                'title' => 'route_edit',
            ],
            [
                'id'    => 50,
                'title' => 'route_show',
            ],
            [
                'id'    => 51,
                'title' => 'route_delete',
            ],
            [
                'id'    => 52,
                'title' => 'route_access',
            ],
            [
                'id'    => 53,
                'title' => 'vidange_controle_create',
            ],
            [
                'id'    => 54,
                'title' => 'vidange_controle_edit',
            ],
            [
                'id'    => 55,
                'title' => 'vidange_controle_show',
            ],
            [
                'id'    => 56,
                'title' => 'vidange_controle_delete',
            ],
            [
                'id'    => 57,
                'title' => 'vidange_controle_access',
            ],
            [
                'id'    => 58,
                'title' => 'entry_ticket_create',
            ],
            [
                'id'    => 59,
                'title' => 'entry_ticket_edit',
            ],
            [
                'id'    => 60,
                'title' => 'entry_ticket_show',
            ],
            [
                'id'    => 61,
                'title' => 'entry_ticket_delete',
            ],
            [
                'id'    => 62,
                'title' => 'entry_ticket_access',
            ],
            [
                'id'    => 63,
                'title' => 'exit_ticket_create',
            ],
            [
                'id'    => 64,
                'title' => 'exit_ticket_edit',
            ],
            [
                'id'    => 65,
                'title' => 'exit_ticket_show',
            ],
            [
                'id'    => 66,
                'title' => 'exit_ticket_delete',
            ],
            [
                'id'    => 67,
                'title' => 'exit_ticket_access',
            ],
            [
                'id'    => 68,
                'title' => 'inventory_create',
            ],
            [
                'id'    => 69,
                'title' => 'inventory_edit',
            ],
            [
                'id'    => 70,
                'title' => 'inventory_show',
            ],
            [
                'id'    => 71,
                'title' => 'inventory_delete',
            ],
            [
                'id'    => 72,
                'title' => 'inventory_access',
            ],
            [
                'id'    => 73,
                'title' => 'location_access',
            ],
            [
                'id'    => 74,
                'title' => 'country_create',
            ],
            [
                'id'    => 75,
                'title' => 'country_edit',
            ],
            [
                'id'    => 76,
                'title' => 'country_show',
            ],
            [
                'id'    => 77,
                'title' => 'country_delete',
            ],
            [
                'id'    => 78,
                'title' => 'country_access',
            ],
            [
                'id'    => 79,
                'title' => 'city_create',
            ],
            [
                'id'    => 80,
                'title' => 'city_edit',
            ],
            [
                'id'    => 81,
                'title' => 'city_show',
            ],
            [
                'id'    => 82,
                'title' => 'city_delete',
            ],
            [
                'id'    => 83,
                'title' => 'city_access',
            ],
            [
                'id'    => 84,
                'title' => 'stock_warehouse_create',
            ],
            [
                'id'    => 85,
                'title' => 'stock_warehouse_edit',
            ],
            [
                'id'    => 86,
                'title' => 'stock_warehouse_show',
            ],
            [
                'id'    => 87,
                'title' => 'stock_warehouse_delete',
            ],
            [
                'id'    => 88,
                'title' => 'stock_warehouse_access',
            ],
            [
                'id'    => 89,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 90,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 91,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 92,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 93,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 94,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 95,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 96,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 97,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 98,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 99,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 100,
                'title' => 'bus_park_create',
            ],
            [
                'id'    => 101,
                'title' => 'bus_park_edit',
            ],
            [
                'id'    => 102,
                'title' => 'bus_park_show',
            ],
            [
                'id'    => 103,
                'title' => 'bus_park_delete',
            ],
            [
                'id'    => 104,
                'title' => 'bus_park_access',
            ],
            [
                'id'    => 105,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 106,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 107,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 108,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 109,
                'title' => 'user_alert_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
