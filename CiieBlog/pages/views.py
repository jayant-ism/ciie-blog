from django.shortcuts import render
from django.views.generic import TemplateView , ListView
from .models import *
# Create your views here.

class HomePageView(TemplateView):
    template_name = 'index.html'

class AboutPageView(TemplateView):
    template_name = 'about.html'

class ContactPageView(TemplateView):
    template_name = 'contact.html'

class ListPageView(ListView):
    model = TableDisplay 
    template_name = 'list.html'
