class Farmer:
    def __init__(self, name):
        """
        Initialize a Farmer object with a name and an empty list of products.

        :param name: str, the name of the farmer
        """
        self.name = name
        self.products = []

    # Create a farmer
    def create_farmer(self, name):
        """
        Set the name of the Farmer object.

        :param name: str, the name of the farmer
        :return: None
        """
        self.name = name

    # Read a farmer's name
    def read_farmer(self):
        """
        Return the name of the Farmer object.

        :return: str, the name of the farmer
        """
        return self.name

    # Update a farmer's name
    def update_farmer(self, new_name):
        """
        Update the name of the Farmer object.

        :param new_name: str, the new name of the farmer
        :return: None
        """
        self.name = new_name

    # Delete a farmer and all their products
    def delete_farmer(self):
        """
        Delete the name of the Farmer object and clear the list of products.

        :return: None
        """
        del self.name
        self.products = []

    # Add a product to the farmer's list of products
    def add_product(self, product):
        """
        Add a Product object to the farmer's list of products.

        :param product: Product, a Product object
        :return: None
        """
        self.products.append(product)

    # Remove a product from the farmer's list of products
    def remove_product(self, product):
        """
        Remove a Product object from the farmer's list of products.

        :param product: Product, a Product object
        :return: None
        """
        self.products.remove(product)

class Product:
    def __init__(self, name, price, farmer):
        """
        Initialize a Product object with a name, price, and a reference to a Farmer object.

        :param name: str, the name of the product
        :param price: float, the price of the product
        :param farmer: Farmer, a reference to a Farmer object
        """
        self.name = name
        self.price = price
        self.farmer = farmer

    # Implement CRUD methods for Product

    # Create a product
    def create_product(self, name, price, farmer):
        """
        Create a new Product object with the given name, price, and farmer.

        :param name: str, the name of the product
        :param price: float, the price of the product
        :param farmer: Farmer, a reference to a Farmer object
        :return: Product, a new Product object
        """
        return Product(name, price, farmer)

    # Read a product's details
    def read_product(self):
        """
        Return the name and price of the Product object.

        :return: tuple, (str, float), the name and price of the product
        """
        return (self.name, self.price)

    # Update a product's details
    def update_product(self, new_name, new_price):
        """
        Update the name and price of the Product object.

        :param new_name: str, the new name of the product
        :param new_price: float, the new price of the product
        :return: None
        """
        self.name = new_name
        self.price = new_price

    # Delete a product
    def delete_product(self):
        """
        Delete the Product object.

        :return: None
        """
        del self

class Order:
    def __init__(self, products):
        """
        Initialize an Order object with a list of Product objects.

        :param products: list, a list of Product objects
        """
        self.products = products

    # Implement CRUD methods for Order

    # Add a product to the order
    def add_product(self, product):
        """
        Add a Product object to the order.

        :param product: Product, a Product object
        :return: None
        """
        self.products.append(product)

    # Remove a product from the order
    def remove_product(self, product):
        """
        Remove a Product object from the order.

        :param product: Product, a Product object
        :return: None
        """
        self.products.remove(product)

    # Calculate the total price of the order
    def calculate_total_price(self):
        """
        Calculate and return the total price of all the products in the order.

        :return: float, the total price of the order
        """
        total_price = 0
        for product in self.products:
            total_price += product.price
        return total_price