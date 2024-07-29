export default [
  { heading: "Others" },
  {
    title: "Access Control",
    icon: { icon: "ri-shield-line" },
    to: "access-control",
    action: "read",
    subject: "AclDemo",
    type: "item",
  },
  {
    title: "Product List",
    icon: { icon: "ri-bar-chart-horizontal-line" },
    to: "apps-product-list",
    action: "list",
    subject: "Product Manager",
    type: "item",
  },
  {
    title: "Product Add",
    icon: { icon: "ri-menu-add-line" },
    to: "apps-product-add",
    action: "add",
    subject: "Product Manager",
    type: "item",
  },
  {
    title: "Product Edit",
    icon: { icon: "ri-edit-line" },
    to: "apps-product-edit",
    action: "edit",
    subject: "Product Manager",
    type: "item",
  },
  {
    title: "Nav Levels",
    icon: { icon: "ri-menu-line" },
    children: [
      {
        title: "Level 2.1",
        to: null,
      },
      {
        title: "Level 2.2",
        children: [
          {
            title: "Level 3.1",
            to: null,
          },
          {
            title: "Level 3.2",
            to: null,
          },
        ],
      },
    ],
  },
  {
    title: "Disabled Menu",
    to: null,
    icon: { icon: "ri-eye-off-line" },
    disable: true,
  },
  {
    title: "Raise Support",
    href: "https://themeselection.com/support/",
    icon: { icon: "ri-lifebuoy-line" },
    target: "_blank",
  },
  {
    title: "Documentation",
    href: "https://demos.themeselection.com/materio-vuetify-vuejs-admin-template/documentation/guide/laravel-integration/folder-structure.html",
    icon: { icon: "ri-article-line" },
    target: "_blank",
  },
];
