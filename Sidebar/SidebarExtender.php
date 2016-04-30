<?php namespace Modules\Countries\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Contracts\Authentication;

class SidebarExtender implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param Menu $menu
     *
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group('Countries', function (Group $group) {
            $group->weight(5);

            $group->item(trans('countries::cities.title.cities'), function (Item $item) {
                $item->weight(2);
                $item->icon('fa fa-map-marker');
                $item->route('admin.countries.city.index');
                $item->authorize(
                  $this->auth->hasAccess('countries.cities.index')
                );
            });
            $group->item(trans('countries::countries.title.countries'), function (Item $item) {
                $item->weight(2);
                $item->icon('fa fa-map-marker');
                $item->route('admin.countries.country.index');
                $item->authorize(
                  $this->auth->hasAccess('countries.countries.index')
                );
            });
            $group->item(trans('countries::languages.title.languages'), function (Item $item) {
                $item->weight(2);
                $item->icon('fa fa-comment-o');
                $item->route('admin.countries.language.index');
                $item->authorize(
                  $this->auth->hasAccess('countries.languages.index')
                );
            });

        });

        return $menu;
    }
}
