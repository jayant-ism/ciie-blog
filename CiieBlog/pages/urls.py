from django.urls import path
from .views import *

urlpatterns = [
    path('about/', AboutPageView.as_view(), name='about'),
    path('contact/', ContactPageView.as_view(), name='contact'),
    path('list/', ListPageView.as_view(), name='list'),
    path('', HomePageView.as_view(), name='home'), 
]
