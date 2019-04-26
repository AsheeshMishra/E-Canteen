
from django.contrib import admin
from django.urls import path,include
from django.views.generic.base import TemplateView
from django.contrib.auth import views as auth_views
from . import views
from .views import (
	ItemListView,
	ItemDetailView,
	ItemCreateView,
	ItemUpdateView,
	ItemDeleteView
)
urlpatterns = [
      path('logout/',views.logout_view,name='logout'),
    path('',ItemListView.as_view(),name='item_list'),
   path('item/<int:pk>/',ItemDetailView.as_view(),name='item_detail'),
   path('item/new/',ItemCreateView.as_view(),name='item_create'),
    path('item/<int:pk>/update/',ItemUpdateView.as_view(),name='item_update'),
    path('item/<int:pk>/delete/',ItemDeleteView.as_view(),name='item_delete'),
   path('add_item/',views.add_item,name='add_item'),
    path('shopkeeper_signup/',views.register_shopkeeper,name='shopkeeper_signup'),
    path('shopkeeper_login/', auth_views.LoginView.as_view(template_name='registration/login.html'), name='shopkeeper_login'),


]
