from django.db import models

# Create your models here.
class TableDisplay(models.Model):
    name = models.CharField(max_length=200)
    website = models.CharField(max_length=200)
    contact = models.CharField(max_length=200)
    details = models.CharField(max_length=200)
 

def __str__(self):
    return self.name
